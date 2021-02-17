<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Help;
use Storage;

class HelpController extends Controller{

    public function index(){
        $help = Help::get();
        return view('help.index', compact('help'));
    }

    public function create(){
        //
    }

    public function store(Request $request){
        $this->validate($request, [
            'name_contact' => 'required',
            'contact'      => 'required',
        ],
        [
            'name_contact' => 'Nama Kontak harus diisi',
            'contact'      => 'Kontak harus diisi',
        ]);
        help::create([
            'name_contact' => $request->name_contact,
            'contact'      => $request->contact,
        ]);

        return redirect('help')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(help $help){
        return $help;
    }
    public function edit(help $help)
    {
        return $help;
    }

    public function update(Request $request, help $help)
    {
        $help->update(array_merge($request->all()));
        return redirect('help')->with('success', 'Data berhasil diubah');
    }

    public function destroy(help $help)
    {
        $help->delete();
    }
}
