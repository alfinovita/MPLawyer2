<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{

    public function index()
    {
        return view('frontend-client.login');
    }

    public function register()
    {
        return view('frontend-client.register');
    }

    public function registerPost(Request $request)
    {
        if($request->telp[0] == 0){
            $telp = substr($request->telp, 1);
        }else{
            $telp = $request->telp;
        }
        $request->merge([
            'telp' => "+62".$telp,
        ]);
        $this->validate($request, [
            'email'     => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'telp' => 'required|unique:users'
        ],
        [
            'email.unique'  => 'Email Sudah digunakan',
            'telp.unique'   => 'Telpon Sudah digunakan',
            'password.confirmed' => 'Password tidak sama',
            'password.max' => 'Mininamal 8 Character',
        ]);
        User::create(array_merge($request->all(),[
            'token'     => '',
            'password'  => Hash::make($request->password),
            'status'    => true,
            'verified'    => false,
            'avatar'    => '',
            'role'      => 'CLIENT'
        ]));
        return redirect()->route('log-client')->with('success', 'Registrasi Berhasil Silahkan Login');
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->where('role', 'CLIENT')->first();

        if (!$user) {
            return redirect()->back()->with('cancel', 'User tidak ditemukan');
        }
        $checkPass = \Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($checkPass == true) {
            \Session::put('user', $user);
            return redirect()->route('home-client')->with('login', $user->nama_lengkap);
        } else {
            return redirect()->back()->with('cancel', 'Username atau password salah');
        }
    }

    public function forget(Request $request)
    {
        return view('frontend-client.forget');
    }

    public function forgetPost(Request $request)
    {
        $check = User::where('email', $request->email)->where('role', 'CLIENT')->first();
        if(!$check){
            return redirect()->back()->with('cancel', 'Email belum terdaftar');
        }else{
            $token_real = str_random(10);
            $token = Crypt::encryptString($token_real);
            $check->update([
                'remember_token' => $token_real
            ]);
            $checkemail = app('App\Http\Controllers\EmailController')->emailForgetPassword($request->email, $token, $check);
            if($checkemail == false){
                return redirect()->back()->with('cancel', 'Email gagal dikirim');
            }else{
                return redirect()->back()->with('success', 'Email Berhasil dikirim Silahkan cek email anda');
            }
        }
    }

    public function change($email, $token)
    {
        $token_real = Crypt::decryptString($token);
        $user = User::where('email', $email)->first();
        if($token_real == $user->remember_token){
            return view('frontend-client.reset-password', compact('user'));
        }else{
            return redirect('client');
        }
    }

    public function reset(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:8',
        ],
        [
            'password.confirmed' => 'Password tidak sama',
            'password.max' => 'Mininamal 8 Character',
            ]);
        User::where('id', $request->id)->update([
            'password'       => Hash::make($request->password),
            'remember_token' => ''
        ]);
        return redirect('client')->with('success', 'Password Berhasil dirubah Silahkan login kembali');
    }
    public function logout()
    {
        \Auth::logout();
        \Session::forget('user');
        return redirect()->route('log-client');
    }
}