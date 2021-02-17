@extends('layouts.app')
@section('title')
Report
@endsection
@section('css')
@endsection

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Report</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Report</h6>
    
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Judul Report</th>
            <th>Penjelasan</th>
            <th>Client</th>
            <th>Lawyer</th>
            <th>File</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        
          @foreach($report as $m)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->judul_report}}</td>
            <td>{{$m->penjelasan}}</td>
            <td>{{$m->client->nama_lengkap}}</td>
            <td>{{$m->lawyer->nama_lengkap}}</td>
            <td><a href="{{$m->file }}" class="badge btn-info" style="color:white">Download File</a></td>
 

            <td>
            <a href="{{request()->url('report')}}/{{$m->id}}" name="report" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
<script>
  
</script>

@endsection