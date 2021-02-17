<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;
use Storage;

class AdminController extends Controller{

    public function index(){
        $admin = Admin::where('role', 'ADMIN')->orderBy('id', 'desc')->get();
        return view('admin.index', compact('admin'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $this->validate($request, [
            'username'  => 'required',
            'email'     => 'required',
            'telp'      => 'required',
            'avatar'    => 'required|max:2024',
            'password'  => 'required|confirmed|min:6',
        ],
        [
            'username'              => 'Username sudah digunakan',
            'email'                 => 'Email sudah digunakan',
            'telp'                  => 'Telp sudah digunakan',
            'avatar.max'            => 'Ukuran File Max 2 mb',
            'password.confirmed'    => 'Password Tidak Sama',
            'password.min'          => 'Password Min 6 Karakter',
        ]);
        $avatar = $request->file('avatar')->store('avatar');
        Admin::create([
            'username'   => strtolower($request->username),
            'avatar' => $avatar,
            'email'  => $request->email,
            'telp'   => $request->telp,
            'role'   => 'ADMIN',
            'password'=> Hash::make($request->password)
        ]);

        return redirect('admin')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Admin $admin)
    {
        return $admin;
    }

    public function update(Request $request, Admin $admin)
    {
        if($request->avatar){
            $avatar = $request->file('avatar')->store('avatar');
            if(Storage::exists($admin->avatar)){
                Storage::delete($admin->avatar);
            }
        }else{
            $avatar = $admin->avatar;
        }
        $admin->update(array_merge($request->all(), [
            'avatar' => $avatar
        ]));
        return redirect('admin')->with('success', 'Data berhasil diubah');
    }
    
    public function destroy(Admin $admin)
    {
        $admin->delete();
        if(Storage::exists($admin->avatar)){
            Storage::delete($admin->avatar);
        }
    }

    public function change(Request $request, $id)
    {
        $this->validate($request, [
            'password'  => 'required|confirmed|min:6',
        ],
        [
            'password.confirmed'    => 'Password Tidak Sama',
            'password.min'          => 'Min 6 Karakter',
            ]);
        
            Admin::where('id', $id)->update([
                'password'=> Hash::make($request->password)
        ]);
        return redirect('admin')->with('success', 'Password berhasil diubah');
    }
}
