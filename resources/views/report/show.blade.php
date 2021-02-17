@extends('layouts.app')
@section('title')
Detail Report
@endsection
@section('css')
<style>
    
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Report</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail Report</h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Judul Report</td>
                    <td>:</td>
                    <td>{{$report->judul_report}}</td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td>{{$report->penjelasan}}</td>
                </tr>
                <tr>
                    <td>Client</td>
                    <td>:</td>
                    <td>{{$report->client->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>Lawyer</td>
                    <td>:</td>
                    <td>{{$report->lawyer->nama_lengkap}}</td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td><a href="{{asset($report->file)}}" class="badge btn-info" style="color:white">Download File</a></td>
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