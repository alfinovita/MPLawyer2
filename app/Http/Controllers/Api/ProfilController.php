<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Validate;
use App\User;
use App\LawyerDetail;
use App\LawyerPrice;
use App\Service;
use App\Faq;
use App\Privacy;
use App\Setting;
use App\Help;
use App\VerifikasiClient;
use App\PengajuanMember;

use DB;
use File;
use Storage;

class ProfilController extends Controller{

    
    public function verifikasiClient(Request $request)
    {
        $required = Validate::required($request, ['no_ktp', 'ktp', 'selfie_ktp']);
        if ($required) return $required;
        $check = VerifikasiClient::where('user_id', $request->user->id)->first();
        if($check){
            return response()->json(['message' => 'Sudah melakukan verifikasi silahkan tunggu konfirmasi admin', 'code' => 2, 'error' => true]);
        }
        
        $ktp        = $request->file('ktp')->store('ktp');
        $selfie_ktp = $request->file('selfie_ktp')->store('selfie_ktp');
        VerifikasiClient::create([
            'user_id'   => $request->user->id,
            'no_ktp'    => $request->no_ktp,
            'ktp'       => $ktp,
            'selfie_ktp'=> $selfie_ktp,
            'status'    => 'WAITING'
        ]);
        return response()->json(['message' => 'Verifikasi berhasil dilakukan', 'code' => 1, 'error' => false]);
        
    }

    public function update(Request $request){
        $required = Validate::required($request, ['nama_lengkap', 'alamat']);
        if ($required) return $required;
        if($request->user->role == 'LAWYER'){
            $required = Validate::required($request, ['bio', 'bahasa', 'kota', 'provinsi', 'gelar']);
            if ($required) return $required;
            $lawyer = LawyerDetail::where('user_id', $request->user->id)->first();
            $lawyer->update([
                'bio'   => $request->bio,
                'kota'   => $request->kota,
                'provinsi'   => $request->provinsi,
                'gelar'   => $request->gelar,
                'bahasa' => json_encode($request->bahasa)
            ]);
        }
        User::where('id', $request->user->id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
        ]);
        $user = User::find($request->user->id);
        if($request->user->role == 'LAWYER'){
            $user = collect($user)->prepend($request->bio, 'bio');
        }
        return response()->json(['message' => 'Berhasil update profil', 'code' => 1, 'error' => false, 'user' => $user]);

    }

    public function updateAvatar(Request $request){
        
        if($request->avatar){
            $image = $request->file('avatar')->store('avatar');
            if($image){
                if (Storage::exists($request->user->avatar)) {
                    Storage::delete($request->user->avatar);
                }
                $update = User::where('id', $request->user->id)->update(['avatar' => $image]);
                if($update){
                    return response()->json(['message' => 'Berhasil upload gambar', 'code' => 1, 'error' => false, 'avatar_update' => $image]);
                }else{
                    return response()->json(['message' => 'Gagal update gambar', 'code' => 3, 'error' => true]);
                }
            }else{
                return response()->json(['message' => 'Terjadi Kesalahan saat upload gambar', 'code' => 2, 'error' => true]);
            }
        }else{
            return response()->json(['message' => 'Terjadi Kesalahan saat mengirim gambar', 'code' => 4, 'error' => true]);
        }
    }
    
    function myprofil(Request $request){
        if($request->user->role == 'LAWYER'){
            $user1 = User::select('id','nama_lengkap', 'avatar', 'email', 'verified', 'telp', 'jenis_kelamin', 'role', 'type')->where('id', $request->user->id)->first();
            $detail = LawyerDetail::where('user_id', $request->user->id)->first();
            $user = collect($user1)->prepend(json_decode($detail->bahasa)??[], 'bahasa')->prepend($detail->kota??'', 'kota')->prepend($detail->provinsi??'', 'provinsi')->prepend($detail->gelar??'', 'gelar');
        }else{
            $user = User::select('id','nama_lengkap', 'avatar', 'email', 'verified', 'telp', 'jenis_kelamin', 'role', 'type')->where('id', $request->user->id)->first();
        }
        // return ($user);
        $privacy = Privacy::find(1);
        $faq = Faq::get();
        $bantuan = Help::get();
        $pengajuan = PengajuanMember::where('user_id', $request->user->id)->orderBy('id', 'desc')->first();
        if($pengajuan){
            $date1  = date_create(date('Y-m-d'));
            $date2 = date_create($pengajuan->member_expired);
            $diff=date_diff($date1,$date2);
        }

        if($request->user->role == 'LAWYER'){
            $lawyer = LawyerDetail::where('user_id', $request->user->id)->first();
            $lawyerservice = json_decode($lawyer->service);
            $service = Service::select('nama', 'gambar')->whereIn('id', $lawyerservice)->get();
            return response()->json(['message' => 'My Profile', 'code' => 1, 'error' => false, 'user' => $user,'layanan_hukum' => $service, 'privacy' => $privacy, 'faq' => $faq, 'bantuan' => $bantuan, 'status_membership' => $pengajuan->status??'BELUM_MEMBERSHIP', 'sisa_member' => $diff->days??0]);
        }else{
            $verified = VerifikasiClient::where('user_id', $user->id)->first();
            return response()->json(['message' => 'My Profile', 'code' => 1, 'error' => false, 'user' => $user, 'privacy' => $privacy, 'faq' => $faq, 'bantuan' => $bantuan, 'status_verifikasi' => $verified->status??'BELUM_VERIFIED']);
        }
    }

    public function changeProbono(Request $request)
    {
        $lawyer = LawyerDetail::where('user_id', $request->user->id)->first();
        $lawyer->update([
            'probono' => $request->status
        ]);
        return response()->json(['message' => 'Status Probono berhasil diubah ke '.$request->status, 'code' => 1, 'error' => false, 'status_probono' => $lawyer->probono]);
    }
    public function editLayanan(Request $request)
    {
        $lawyer = LawyerDetail::where('user_id', $request->user->id)->first();
        $layanan = json_decode($lawyer->service);
        foreach($layanan as $m){
            $service = Service::find($m);
            $harga = LawyerPrice::where('user_id', $request->user->id)->where('service_id', $m)->first();
            if($harga){
                $data[] = [
                    'id' => $service->id,
                    'service' => $service->nama,
                    'gambar' => $service->gambar,
                    'harga' => $harga->harga,
                    'deskripsi' => $harga->deskripsi,
                ];
            }else{
                $data[] = [
                    'id' => $service->id,
                    'service' => $service->nama,
                    'gambar' => $service->gambar,
                    'harga' => 0,
                    'deskripsi' => '',
                ];
            }
        }
        return response()->json(['message' => 'Data Layanan','code' => 1, 'error' => false, 'status_probono' => $lawyer->probono , 'layanan' => $data ]);
    }
    
    public function updateLayanan(Request $request)
    {
        $id = $request->service_id;
        $lawyer = LawyerDetail::where('user_id', $request->user->id)->first();

        if(!in_array($id, json_decode($lawyer->service))){
            return response()->json(['message' => 'Layanan tidak ada', 'code' => 0, 'error' => true ]);
        }
        $layanan = LawyerPrice::where('service_id', $id)->where('user_id', $request->user->id)->first();
        if($layanan){
            $layanan->update(array_merge($request->all()));
        }else{
            $layanan = LawyerPrice::create(array_merge($request->all(),[
                'user_id' => $request->user->id
            ]));
        }
        return response()->json(['message' => 'Data Layanan berhasil di ubah','code' => 1, 'error' => false, 'layanan' => $layanan ]);
        
        
    }

    
    public function pengajuanMember(Request $request)
    {
        $check = PengajuanMember::whereIn('status', ['WAITING', 'WAITING_PAYMENT', 'PAID'])->where('user_id', $request->user->id)->first();
        if($check){
            return response()->json(['message' => 'Sudah mengajukan','code' => 0, 'error' => true, 'pengajuan' => $check ]);
        }else{
            $pengajuan = PengajuanMember::create([
                'status'    => 'WAITING',
                'user_id'   => $request->user->id,
                'member_expired' => ''
            ]);
            return response()->json(['message' => 'Berhasil mengajukan','code' => 1, 'error' => false, 'pengajuan' => $pengajuan ]);
        }
        
    }
    
    public function getStatusMember(Request $request)
    {
        $harga = Setting::find(2)->value;
        $waktu = Setting::find(3)->value;
        $pengajuan = PengajuanMember::where('user_id', $request->user->id)->orderBy('id', 'desc')->first();
        if($pengajuan){
            return response()->json(['message' => 'Status Membership','code' => 1, 'error' => false, 'verified' => $request->user->verified, 'harga_pengajuan' => $harga , 'member_expired' => $pengajuan->member_expired??'', 'status_membership' => $pengajuan->status??'BELUM_MEMBERSHIP', 'waktu' => $waktu, 'pengajuan' => $pengajuan??'' ]);
        }else{
            return response()->json(['message' => 'Status Membership','code' => 1, 'error' => false, 'verified' => $request->user->verified, 'harga_pengajuan' => $harga , 'member_expired' => $pengajuan->member_expired??'', 'status_membership' => $pengajuan->status??'BELUM_MEMBERSHIP', 'waktu' => $waktu]);
        }
    }

}
