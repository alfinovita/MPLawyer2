<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Events;
use App\Artikel;
use App\Legalitas;
use App\Slider;
use App\Service;
use App\LayananClient;
use App\Peraturan;
use App\PeraturanDetail;
use App\Faq;
use App\LawyerDetail;
use App\Vicon;
use App\Pendampingan;
use App\Tertulis;
use App\Konsultasi;
use App\Pembayaran;
use App\Pertanyaan;
use App\Report;
use App\Pertemuan;
use Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('clientweb');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = User::where('role', 'CLIENT')->orderBy('id')->get();
        // Event
        $event = Events::get();
        //slider client
        $slider_client = Slider::where('role', 'CLIENT')->orderBy('id')->get();
        //slider iklan
        $slider_iklan = Slider::where('role', 'IKLAN')->orderBy('id')->get();
        //artikel
        // $artikel = Artikel::get();
        $artikel = Artikel::where('mode', 'RELEASE')->orderBy('id')->get();
        // bidang hukum
        $bidang_hukum = Service::get();
        //layanan favorit
        $layanan = LayananClient::orderBy('id')->get();
        //Advokat Online
        $advokat_online = User::where('role', 'LAWYER')->where('status_app', 1)->get()->take(8);
        //Detail Advokat Online
        $detail_advokat_online = User::where('role', 'LAWYER')->orderBy('id')->get();
        $jumlah_advokat_online = User::where('role', 'LAWYER')->where('status_app', 1)->orderBy('id')->count();

        // $user = User::where('role', 'LAWYER')->orderBy('id', 'desc')->paginate(10);
        if ($request->search) {
            $user = User::where('role', 'LAWYER')->where('nama_lengkap', 'ilike', '%' . $request->search . '%')->orderBy('id', 'desc')->paginate(10);
        }
        return view('frontend-client.home', compact('event', 'slider_client', 'slider_iklan', 'user', 'artikel', 'bidang_hukum', 'layanan', 'advokat_online', 'jumlah_advokat_online'));
    }

    public function profil()
    {
        $users = User::where('role', 'CLIENT')->where('id', session()->get('user')->id)->first();
        return view('frontend-client.profil', compact('users'));
    }

    public function riwayat()
    {
        $konsultasi = Konsultasi::with('lawyer')->with('service')->where('client_id', session()->get('user')->id)->orderBy('id', 'DESC')->get();
        $pertanyaan = Pertanyaan::with('user')->with('jawaban')->get();
        $pembayaran = Pembayaran::where('client_id', session()->get('user')->id)->where('type', 'MEMBERSHIP')->get();
        return view('frontend-client.riwayat', compact('konsultasi', 'pertanyaan', 'pembayaran'));
    }

    public function FAQ()
    {
        $faq = Faq::get();
        return view('frontend-client.faq', compact('faq'));
    }
    public function kebijakanPrivasi()
    {
        return view('frontend-client.kebijakan_privasi');
    }
    public function bantuan()
    {
        return view('frontend-client.bantuan');
    }

    // riwayat konsultasi

    public function report()
    {
        $report = Report::with('konsultasi')->with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'DESC')->get();
        // dd($report);
        return view('frontend-client.riwayat-konsultasi.report', compact('report'));
    }

    public function pendampingan()
    {
        $pendampingan = Pendampingan::with('konsultasi')->with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'desc')->get();
        return view('frontend-client.riwayat-konsultasi.pendampingan', compact('pendampingan'));
    }

    public function videoconference()
    {
        $vicon = Vicon::with('konsultasi')->with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'desc')->get();
        return view('frontend-client.riwayat-konsultasi.video-conference', compact('vicon'));
    }

    public function pertemuan()
    {
        $pertemuan = Pertemuan::with('konsultasi')->with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'DESC')->get();
        // dd($pertemuan);
        return view('frontend-client.riwayat-konsultasi.pertemuan', compact('pertemuan'));
    }

    public function update_profile(Request $request)
    {
        $data = $request->all();
        $id = session()->get('user')->id;

        User::where('id', $id)->update($data);

        return response($data);
    }

    public function tertulis()
    {
        $tertulis = Tertulis::with('konsultasi')->with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'desc')->get();
        return view('frontend-client.riwayat-konsultasi.tertulis', compact('tertulis'));
    }

    public function tagihan()
    {
        $tagihan = Pembayaran::with('lawyer')->where('client_id', session()->get('user')->id)->orderBy('id', 'desc')->get();
        return view('frontend-client.riwayat-konsultasi.tagihan', compact('tagihan'));
    }

    public function chat()
    {
        $konsultasi = Konsultasi::with('lawyer')->with('chat')->where('lawyer_id', session()->get('user')->id)->orderBy('id', 'DESC')->get();
        return view('frontend-client.chat', compact('$konsultasi'));
    }

    public function detail_artikel($id)
    {
        $artikels = Artikel::get();
        $artikel = Artikel::findOrFail($id);
        return view('frontend-client.detail-home.detail-artikel', compact('artikel', 'artikels'));
    }

    public function detail_event($id)
    {
        $events = Events::get();
        $event = Events::findOrFail($id);
        return view('frontend-client.detail-home.detail-event', compact('event', 'events'));
    }

    public function detail_hukum($id)
    {
        $bidang_hukum = Service::findOrFail($id);

        // $lawyer = LawyerDetail::pluck('service');
        // // dd($lawyer);
        // // exit;
        // for ($i = 0; $i < $lawyer->count(); $i++) {
        //     if (in_array($bidang_hukum->id, json_decode($lawyer[$i]))) {
        //         return 'y';
        //     } else {
        //         dd($lawyer[$i]);
        //     }
        // }

        // exit;

        // for ($i = 0; $i < $lawyer->count(); $i++) {
        //     if ($bidang_hukum->id =)
        //     exit;
        // }

        return view('frontend-client.detail-home.detail-hukum', compact('bidang_hukum'));
    }

    public function detail_iklan($id)
    {
        $slider_iklan = Slider::where('role', 'IKLAN')->findOrFail($id);
        return view('frontend-client.detail-home.detail-iklan', compact('slider_iklan'));
    }

    public function detail_slider_client($id)
    {
        $slider_client = Slider::where('role', 'CLIENT')->findOrFail($id);
        return view('frontend-client.detail-home.detail-slider-client', compact('slider_client'));
    }

    public function detail_lawyer()
    {
        return view('frontend-client.detail-home.detail-lawyer');
    }

    public function detail_lawyer_online($id)
    {
        $detail_advokat_online = User::where('role', 'LAWYER')->findOrFail($id);
        $detail_bidang = Service::whereIn('id', json_decode($detail_advokat_online->lawyer_detail->service))->get();
        return view('frontend-client.detail-home.detail-lawyer-online', compact('detail_advokat_online', 'detail_bidang'));
    }

    public function detail_lawyer_probono()
    {
        return view('frontend-client.detail-home.detail-lawyer-probono');
    }

    public function detail_pembuatan_PT()
    {
        return view('frontend-client.detail-home.detail-pembuatan-PT');
    }

    public function detail_probono()
    {
        return view('frontend-client.detail-home.detail-probono');
    }

    public function legalitas()
    {
        $legalitas = Legalitas::get();
        return view('frontend-client.detail-home.legalitas', compact('legalitas'));
    }

    public function peraturan()
    {
        $peraturan = Peraturan::withCount('detail')->orderBy('id')->get();
        return view('frontend-client.detail-home.update-peraturan', compact('peraturan'));
    }

    public function updatePeraturan($id)
    {
        $detail_peraturan = PeraturanDetail::where('peraturan_id', $id)->get();
        return view('frontend-client.detail-home.detail-update-peraturan', compact('detail_peraturan'));
    }

    public function pembuatan_PT()
    {
        return view('frontend-client.detail-home.pembuatan_PT');
    }

    public function live_chat()
    {
        $advokat_online = User::where('role', 'LAWYER')->get();
        return view('frontend-client.detail-home.live-chat', compact('advokat_online'));
    }

    public function cari(Request $request)
    {


        $search = $request->search;
        $advokat_online = User::where('role', 'LAWYER')->where('nama_lengkap', 'ilike', '%' . $search . '%')->get();

        if ($search == '') {
            return view('frontend-client.home', compact('advokat_online', 'search'));
        } else {
            return view('frontend-client.detail-home.live-chat', compact('advokat_online', 'search'));
        }
        // return view('frontend-client.detail-home.live-chat', compact('advokat_online', 'search'));
    }
}
