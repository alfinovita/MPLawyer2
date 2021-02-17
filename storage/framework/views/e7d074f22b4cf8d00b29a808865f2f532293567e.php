
<?php $__env->startSection('title'); ?>
Pendampingan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-md-9">
<h1 class="h3 mb-4 text-gray-800">Daftar Pendampingan</h1>
</div>
    <div class="col-md-3">
    <form action="<?php echo e(url('pendampingan')); ?>" name="cari" method="GET">
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
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Pendampingan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="20">No</th>
            <th>Nama</th>
            <th width="250">Option</th>
            <th width="350">Tanggal Pendampingan</th>
            <th width="350">Status</th>
            <th width="50">Aksi</th>
            
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $pendampingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->client->nama_lengkap); ?></td>
            <td><?php echo e($m->option); ?></td>
            <td><?php echo e(date('d-m-Y H:m', strtotime($m->updated_at))); ?></td>
            <td>
                <?php if($m->status == 'WAITING'): ?>
                MENUNGGU
                <?php elseif($m->status == 'TOLAK'): ?>
                TOLAK
                <?php elseif($m->status == 'FINISH'): ?>
                SELESAI
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo e(request()->url('pendampingan')); ?>/<?php echo e($m->id); ?>" name="vidcon" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($pendampingan->links()); ?>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<!-- Modal Pendampingan-->
<div class="modal fade" id="modalPendampingan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pendampingan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('pendampingan')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Client ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="client_id" id="client_id" placeholder="Client ID" required>
        </div>
        <div class="form-group">
            <label>Konsultasi ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="konsultasi_id" id="konsultasi_id" placeholder="Konsultasi Id" required>
        </div>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="lawyer_id" id="lawyer_id" placeholder="Lawyer Id" required>
        </div>
        <div class="form-group">
            <label>Option</label>
            <input type="nama" class="form-control form-control-pendampingan" name="option" id="option" placeholder="Option" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-pendampingan" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Alasan Tolak</label>
            <input type="nama" class="form-control form-control-pendampingan" name="alasan_tolak" id="alasan_tolak" placeholder="Alasan Tolak" required>
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
</div>

<!-- Modal Pendampingan Edit-->
<div class="modal fade" id="modalPendampinganEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pendampingan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('pendampingan')); ?>" method="post" enctype="multipart/form-data" class='form-pendampingan'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Client ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="client_id" id="client_id" placeholder="Client ID" required>
        </div>
        <div class="form-group">
            <label>Konsultasi ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="konsultasi_id" id="konsultasi_id" placeholder="Konsultasi Id" required>
        </div>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-pendampingan" name="lawyer_id" id="lawyer_id" placeholder="Lawyer Id" required>
        </div>
        <div class="form-group">
            <label>Option</label>
            <input type="nama" class="form-control form-control-pendampingan" name="option" id="option" placeholder="Option" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-pendampingan" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Alasan Tolak</label>
            <input type="nama" class="form-control form-control-pendampingan" name="alasan_tolak" id="alasan_tolak" placeholder="Alasan Tolak" required>
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
  // $('.editPendampingan').on('click', function(){
    $('table tbody').on( 'click', '.editPendampingan', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('pendampingan')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/pendampingan/" + id + "/edit",
            success:function(data){
              $('.form-pendampingan').attr( 'action', url)
              $('.form-pendampingan #client_id').val(data.client_id)
              $('.form-pendampingan #konsultasi_id').val(data.konsultasi_id)
              $('.form-pendampingan #lawyer_id').val(data.lawyer_id)
              $('.form-pendampingan #option').val(data.option)
              $('.form-pendampingan #status').val(data.status)
              $('.form-pendampingan #alasan_tolak').val(data.alasan_tolak);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/pendampingan/index.blade.php ENDPATH**/ ?>