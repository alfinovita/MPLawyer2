@extends('layouts.app')
@section('title')
Pengajuan Vicon
@endsection
@section('css')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pengajuan Vicon</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Pengajuan Vicon {{$vidcon->client->nama_lengkap}}</h6>
    </div>
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama Client</td>
                    <td width="10">:</td>
                    <td>{{$vidcon->nama}}</td>
                </tr>
                <tr>
                    <td>Nama Lawyer</td>
                    <td>:</td>
                    <td>{{$vidcon->lawyer->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$vidcon->email}}</td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td>:</td>
                    <td>{{$vidcon->durasi}} Jam</td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td>{{date('d-m-Y H:m', strtotime($vidcon->tgl_pengajuan))}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        @if($vidcon->status == 'WAITING')
                        Menunggu Konfirmasi
                        @elseif($vidcon->status == 'WAITING_PAYMENT')
                        Menunggu Pembayaran
                        @elseif($vidcon->status == 'PAID')
                        Sudah Bayar
                        @elseif($vidcon->status == 'TOLAK')
                        Ditolak
                        @elseif($vidcon->status == 'CONFIRM')
                        Terkonfirmasi
                        @elseif($vidcon->status == 'FINISH')
                        Selesai
                        @endif</td>
                </tr>
                @if($vidcon->alasan_tolak =='')
                @else
                <tr>
                    <td>Alasan Tolak</td>
                    <td>:</td>
                    <td>{{$vidcon->alasan_tolak}}</td>
                </tr>
                @endif
                
                @if($vidcon->link =='')
                @else
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td>{{$vidcon->link}}</td>
                </tr>
                @endif
                
                <tr>
                    <td>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
            </table>
            <div class="modal-body">
                            <label for="">Avatar Lawyer</label>
                            <div class="form-group">
                                @if($vidcon->lawyer->avatar == '')
                                <img src="{{url('public/avatar-default1.png')}}" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                @else
                                <img src="{{asset($vidcon->lawyer->avatar)}}" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                @endif
                            </div>
                        </div>
                        <div class="modal-body">
                            <label for="">Avatar Client</label>
                            <div class="form-group">
                                @if($vidcon->client->avatar == '')
                                <img src="{{url('public/avatar-default1.png')}}" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                @else
                                <img src="{{asset($vidcon->client->avatar)}}" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                @endif
                            </div>
                        </div>
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
@endsection