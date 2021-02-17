@extends('layouts.app')
@section('title')
Pendampingan
@endsection
@section('css')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pendampingan</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Pendampingan {{$pendampingan->client->nama_lengkap}}</h6>
    </div>
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama</td>
                    <td width="10">:</td>
                    <td>{{$pendampingan->client->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Option</td>
                    <td>:</td>
                    <td>{{$pendampingan->option}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        @if($pendampingan->status == 'WAITING')
                        MENUNGGU
                        @elseif($pendampingan->status == 'TOLAK')
                        TOLAK
                        @elseif($pendampingan->status == 'FINISH')
                        SELESAI
                        @endif</td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td>{{date('d-m-Y H:m', strtotime($pendampingan->updated_at))}}</td>
                </tr>
                <tr>
                    <td>Alasan Tolak</td>
                    <td>:</td>
                    <td>{{$pendampingan->alasan_tolak}}</td>
                </tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <label for="">Avatar Client</label>
                            <div class="form-group">
                                @if($pendampingan->client->avatar == '')
                                <img src="{{url('public/avatar-default1.png')}}" alt="Avatar" width="300px" length="300px" class="img-thumbnail myImg">
                                @else
                                <img src="{{asset($pendampingan->client->avatar)}}" alt="Avatar" width="300px" length="300px" class="img-thumbnail myImg">
                                @endif
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
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
@endsection