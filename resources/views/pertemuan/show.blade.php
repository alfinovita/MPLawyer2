@extends('layouts.app')
@section('title')
Detail Pertemuan
@endsection
@section('css')
<style>
    
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pertemuan</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail Pertemuan</h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Client</td>
                    <td>:</td>
                    <td>{{$pertemuan->client->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Lawyer</td>
                    <td>:</td>
                    <td>{{$pertemuan->lawyer->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    @if($pertemuan->status == true)
                    Menunggu
                    @else
                    Tidak Aktif
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td>{{$pertemuan->tgl_pengajuan}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$pertemuan->nama}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$pertemuan->email}}</td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
@section('footer')
@endsection
@section('modal')
@endsection
@section('js')
<script>
</script>
@endsection