@extends('layouts.app')
@section('title')
{{(request()->is('user-lawyer*')?'Lawyer':'Notaris')}}
@endsection
@section('css')
@endsection

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<form action="{{url('user-layanan/update/'.$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Edit Layanan {{$user->nama_lengkap}}</h6>
        </div>
        <div class="modal-body">
            <h3>Service Yang di Layani</h3>
            @foreach($service as $m)
            <div class="form-group" style="border: 1px solid #e6e6e6;">
                <div class="m-3">
                    <img src="{{asset($m['gambar'])}}" alt="{{$m['nama']}}" width="300px" class="img-thumbnail myImg">
                    <input type="hidden" value="{{$m['id']}}" name="service_id[]" class="form-control m-1">
                    <h3>Nama Layanan : {{$m['nama']}}</h3>
                    <h4>Harga : </h4>
                    <input type="number" value="{{$m['harga']}}" name="harga[]" class="form-control m-1">
                    <h4>Harga Vicon : </h4>
                    <input type="number" value="{{$m['harga_vicon']}}" name="harga_vicon[]" class="form-control m-1">
                    <h4>Deskripsi : </h4>
                    <textarea name="deskripsi[]" class="form-control m-1">{{$m['deskripsi']}}</textarea>
                </div>
            </div>
            @endforeach
            <a href="{{url('user-notaris')}}" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button> 
        </div>
    </div>
</form>
</div>
<!-- /.container-fluid -->

@endsection
@section('footer')
@endsection
@section('modal')

@endsection
@section('js')
@endsection