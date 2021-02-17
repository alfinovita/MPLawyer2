<?php

namespace App\Http\Controllers\Advokat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Events;
use App\Slider;
use App\LayananClient;
use App\LayananLawyer;
use App\Artikel;
use App\Legalitas;
use App\Faq;
use App\Vicon;
use App\Peraturan;
use App\PeraturanDetail;
use App\Konsultasi;
use App\Tertulis;
use App\Pendampingan;
use App\Pembayaran;
use App\Transaksi;
use App\Pertanyaan;
use App\Jawaban;
use App\Pertemuan;
use App\Likes;
use App\User;
use App\Chat;
use App\Report;
use App\Privacy;
use App\Help;
use App\LawyerDetail;
use App\MahkamahAgung;
use App\LawyerPrice;
use App\Service;

use Storage;

class HomeController extends Controller
{
    // $this-k=$detail_peraturan;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('lawyerweb');
    }
    // halaman index
    public function index(){   
        $allkonsultasi = Konsultasi::where('lawyer_id', session()->get('user')->id)->where('status', 'FINISH')->get()->count();
        $cancelkonsultasi = Konsultasi::where('lawyer_id', session()->get('user')->id)->whereIn('status', ['CANCEL_lAWYER', 'CANCEL_CLIENT'])->get()->count();
        $ongoingkonsultasi = Konsultasi::where('lawyer_id', session()->get('user')->id)->where('status', 'ON_GOING')->get()->count();
        $artikel = Artikel::where('mode', 'RELEASE')->get();
        $event = Events::where('status', true)->orderBy('id', 'desc')->get();
        $kategori = LayananLawyer::get();
        
        $slider_iklan = Slider::where('role', 'IKLAN')->where('status', true)->orderBy('id')->get();
        $slider_lawyer = Slider::where('role', 'LAWYER')->where('status', true)->orderBy('id')->get();
        // get data harga tidak lengkap
        $lawyer = LawyerDetail::where('user_id', session()->get('user')->id)->first();
        $servicelawyer = json_decode($lawyer->service)??[];
        $lawyerPrice = LawyerPrice::where('user_id', session()->get('user')->id)->whereIn('service_id', $servicelawyer)->count();
        if($lawyerPrice != count($servicelawyer)){
            $statusharga = [
                'status'            => false,
                'count_not_filled'  => count($servicelawyer) - $lawyerPrice
            ];
        }else{
            $statusharga = [
                'status'            => true,
                'count_not_filled'  => count($servicelawyer) - $lawyerPrice
            ];
        }

        return view('frontend-advokat.home',compact('event','slider_iklan','slider_lawyer','kategori','artikel','allkonsultasi', 'cancelkonsultasi', 'ongoingkonsultasi', 'statusharga'));
    }

    //detail index
    public function sliderIklan($id)
    {
        $slider_iklan = Slider::where('role', 'IKLAN')->findOrFail($id);
        return view('frontend-advokat.slider.iklan',compact('slider_iklan'));
    }
    public function sliderLawyer($id)
    {
        $slider_lawyer = Slider::where('role', 'LAWYER')->findorfail($id);
        return view('frontend-advokat.slider.lawyer',compact('slider_lawyer'));
    }
    public function detailArtikel($id)
    {        
        $artikels = Artikel::where('mode', 'RELEASE')->get();
        $artikel = Artikel::with('like')->with('comment')->findOrFail($id);
        return view('frontend-advokat.artikel.index',compact('artikel','artikels'));
    }
    public function detailEvent($id)
    { 
        // dd($id);
        $events = Events::get();
        $event = Events::findOrFail($id);
        return view('frontend-advokat.event.index',compact('event','events'));
    }
 

    //kategori
    public function legalitas()
    {
        $legalitas = LayananLawyer::where('id', 9)->get();
        return view('frontend-advokat.kategori.legalitas.index', compact('legalitas'));
    }
    public function mahkamahAgung()
    {
        $mahkamah_agung = MahkamahAgung::get();
        return view('frontend-advokat.kategori.mahkamah-agung.index',compact('mahkamah_agung'));
    }
    public function peraturan()
    {
        $peraturan = Peraturan::withCount('detail')->orderBy('id')->get();
        return view('frontend-advokat.kategori.update-peraturan.index', compact('peraturan'));
    }
    
    public function updatePeraturan($id)
    {
        $detail_peraturan = PeraturanDetail::with('peraturan')->where('peraturan_id', $id)->orderBy('id')->get();
        return view('frontend-advokat.kategori.update-peraturan.detail',compact('detail_peraturan'));
    }

    // halaman di navbar
    public function pertanyaan()
    {
        $pertanyaan = Pertanyaan::with('user')->with('jawaban')->get();

        return view('frontend-advokat.pertanyaan.index',compact('pertanyaan'));
    }
    public function detailPertanyaan($id)
    {
        $pertanyaan_detail = Pertanyaan::with('jawaban')->find($id);
        $akun = User::with('lawyer_detail')->where('role', 'LAWYER')->where('id', session()->get('user')->id)->first();
        // dd($pertanyaan_detail);
        return view('frontend-advokat.pertanyaan.detail',compact('pertanyaan_detail','akun'));
    }
    public function riwayat()
    {
        $konsultasi=Konsultasi::with('client')->with('service')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        $pembayaran=Pembayaran::where('lawyer_id', session()->get('user')->id)->where('type','MEMBERSHIP')->get();
        
     return view('frontend-advokat.riwayat.index',compact('konsultasi','pembayaran'));
    }
    public function profil()
    {
        $profil = User::with('lawyer_detail')->where('role', 'LAWYER')->where('id', session()->get('user')->id)->first();
        $bidang = Service::whereIn('id', json_decode($profil->lawyer_detail->service))->get();
        return view('frontend-advokat.profil.index',compact('profil', 'bidang'));
    }
    public function bidangHukum()
    {
        $profil = User::with('lawyer_detail')->with('lawyer_price')->where('role', 'LAWYER')->where('id', session()->get('user')->id)->first();
        $bidang = Service::whereIn('id', json_decode($profil->lawyer_detail->service))->get();
        //  $lawyerPrice = LawyerPrice::where('user_id', session()->get('user')->id)->whereIn('service_id', json_decode($profil->lawyer_detail->service))->get();
        foreach ($bidang as $m) {
            $lawyerPrice = LawyerPrice::where('user_id', session()->get('user')->id)->where('service_id', $m->id)->get();
            $data[] = collect($m)->prepend($lawyerPrice, 'lawyerPrice');;

        }
        return view('frontend-advokat.profil.bidang-hukum',compact('bidang','data'));
    }
    public function FAQ()
    {      
        $faq = Faq::get();
        return view('frontend-advokat.faq.index',compact('faq'));
    }
    public function kebijakanPrivasi()
    {
        $privacy =Privacy::first();
        return view('frontend-advokat.kebijakan.index',compact('privacy'));
    }
    public function bantuan()
    {
        $help = Help::get();
        return view('frontend-advokat.bantuan.index',compact('help'));
    }

    //halaman di aktivitas
    public function liveChat()
    {
        $konsultasi=Konsultasi::with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        foreach($konsultasi as $k)
        $chat=Chat::with('konsultasi')->where('konsultasi_id',$k->id)->get();
      dd($konsultasi);
        return view('frontend-advokat.aktivitas.livechat.index',compact('konsultasi','chat'));
    }
    public function videoConference()
    {
        $vicon =Vicon::with('konsultasi')->with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        return view('frontend-advokat.aktivitas.video-conference.index',compact('vicon'));
    }
    public function detailVideoConference($id)
    {
        $vicon_detail =Vicon::find($id);
        return view('frontend-advokat.aktivitas.video-conference.detail',compact('vicon_detail'));
    }
    public function artikel()
    {
        $artikelsaya = Artikel::where('user_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        return view('frontend-advokat.aktivitas.artikel.index',compact('artikelsaya'));
    }
    public function detailArtikelSaya($id)
    {
        $artikelsaya = Artikel::where('user_id', session()->get('user')->id)->get();
        $detail_artikel_saya = Artikel::with('like')->with('comment')->findOrFail($id);
        return view('frontend-advokat.aktivitas.artikel.detail',compact('detail_artikel_saya','artikelsaya'));
    }
    public function report()
    {
        $report =Report::with('konsultasi')->with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();

    //    dd($report);
        return view('frontend-advokat.aktivitas.report.index',compact('report'));
    }
    public function pertemuan()
    {
        $pertemuan=Pertemuan::with('konsultasi')->with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
    //    dd($pertemuan);
        return view('frontend-advokat.aktivitas.pertemuan.index',compact('pertemuan'));
    }
    public function detailPertemuan($id)
    {
        $pertemuan_detail = Pertemuan::find($id);
        // dd($pertemuan_detail);
        return view('frontend-advokat.aktivitas.pertemuan.detail',compact('pertemuan_detail'));
    }
    public function pendampingan()
    {
        $pendampingan=Pendampingan::with('konsultasi')->with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        return view('frontend-advokat.aktivitas.pendampingan.index',compact('pendampingan'));
    }
    public function detailPendampingan($id)
    {
        $pendampingan_detail =Pendampingan::find($id);
        return view('frontend-advokat.aktivitas.pendampingan.detail',compact('pendampingan_detail'));
    }
    public function tertulis()
    {
        $tertulis =Tertulis::with('konsultasi')->with('client')->where('lawyer_id', session()->get('user')->id)->orderBy('id','DESC')->get();
        return view('frontend-advokat.aktivitas.tertulis.index',compact('tertulis'));
    }
    public function detailTertulis($id)
    {
        $tertulis_detail =Tertulis::find($id);
        return view('frontend-advokat.aktivitas.tertulis.detail',compact('tertulis_detail'));
    }
    public function tagihan()
    {
        $tagihan =Pembayaran::with('client')->where('lawyer_id', session()->get('user')->id)->whereIn('type',['VICON','PENDAMPINGAN','PERTEMUAN','LIVE_CHAT','TERTULIS'])->orderBy('id','DESC')->get();
        // dd($tagihan);
        return view('frontend-advokat.aktivitas.tagihan.index',compact('tagihan'));
    }
    public function buatTagihan()
    {
        return view('frontend-advokat.aktivitas.tagihan.buat-tagihan');
    }

    public function update_profil(Request $request)
    {
        $data = $request->all();
        $id = session()->get('user')->id;

        User::where('id', $id)->update($data);

        return response($data);
    }
}
