
<?php $__env->startSection('title'); ?>
Video Conference
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-md-9">
<h1 class="h3 mb-4 text-gray-800">Daftar Video Conference</h1>
</div>
    <div class="col-md-3">
    <form action="<?php echo e(url('vidcon')); ?>" name="cari" method="GET">
      <div class="row mb-1">
        <div class="input-group">
          <input type="text" name="search" class="form-control col-md-9" placeholder="Cari Nama">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-danger">Cari</button>
            </span>
        </div>
      </div>
      </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Video Conference</h6>

  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Durasi</th>
            <th>Tanggal Pengajuan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $vicon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->nama); ?></td>
            <td><?php echo e($m->email); ?></td>
            <td><?php echo e($m->durasi); ?> Jam</td>
            <td><?php echo e(date('d-m-Y H:m:s', strtotime($m->tgl_pengajuan))); ?></td>
            <td>
                        <?php if($m->status == 'WAITING'): ?>
                        Menunggu Konfirmasi
                        <?php elseif($m->status == 'WAITING_PAYMENT'): ?>
                        Menunggu Pembayaran
                        <?php elseif($m->status == 'PAID'): ?>
                        Sudah Bayar
                        <?php elseif($m->status == 'TOLAK'): ?>
                        Ditolak
                        <?php elseif($m->status == 'CONFIRM'): ?>
                        Terkonfirmasi
                        <?php elseif($m->status == 'FINISH'): ?>
                        Selesai
                        <?php endif; ?></td>
            <td>
                <a href="<?php echo e(request()->url('vidcon')); ?>/<?php echo e($m->id); ?>" name="vidcon" style="color:white" class="badge bg-success">Detail</a>
                <?php if($m->status == 'PAID' AND $m->link == ''): ?>
                <a href="#" name="vidcon" style="color:white" class="badge bg-info editVidcon" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalTambahLink">Tambah Link</a>
                <?php elseif($m->status == 'PAID'): ?>
                <a href="#" name="vidcon" style="color:white" class="badge bg-info editVidcon" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalTambahLink">Edit Link</a>
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($vicon->links()); ?>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<!-- Modal events
<div class="modal fade" id="modalTambahLinks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Link</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('vidcon')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control form-control-vidcon" name="link" placeholder="Link" required>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>
</div>-->

<!-- Modal Edit Events-->
<div class="modal fade" id="modalTambahLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Link Vicon</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('vidcon')); ?>" method="post" enctype="multipart/form-data" class='form-vidcon'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control form-control-vidcon" name="link" id="link" placeholder="Link" required>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  // $('.editEvent').on('click', function(){
    $('table tbody').on('click', '.editVidcon', function(e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    // console.log(data);
    var url = "<?php echo e(url('vidcon')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/vidcon/" + id + "/edit",
            success:function(data){
              $('.form-vidcon').attr( 'action', url)
              $('.form-vidcon #link').val(data.link);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/vidcon/index.blade.php ENDPATH**/ ?>