
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('konsultasi-ongoing*')?'Konsultasi Berlangsung':(request()->is('konsultasi-finish*')?'Konsultasi Selesai':'History Konsultasi')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar <?php echo e(request()->is('konsultasi-ongoing*')?'Konsultasi Berlangsung':(request()->is('konsultasi-finish*')?'Konsultasi Selesai':'History Konsultasi')); ?></h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Konsultasi</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lawyer</th>
            <th>Nama Client</th>
            <th>Status</th>
            <th>Service</th>
            <th>Tanggal Konsultasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $konsultasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->lawyer->nama_lengkap); ?></td>
            <td><?php echo e($m->client->nama_lengkap); ?></td>
            <td><?php echo e($m->status); ?></td>
            <?php if($m->service_id == 0): ?>
            <td>Probono</td>
            <?php else: ?>
            <td><?php echo e($m->service->nama); ?></td>
            <?php endif; ?>
            <td><?php echo e($m->created_at); ?></td>
            <td>
                <a href="<?php echo e(request()->is('konsultasi-ongoing*')?url('konsultasi-ongoing'):(request()->is('konsultasi-finish*')?url('konsultasi-finish'):url('konsultasi-history'))); ?>/<?php echo e($m->id); ?>" name="konsultasi" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($konsultasi->links()); ?>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
  // $('.editKonsultasi').on('click', function(){
    $('table tbody').on( 'click', '.editKonsultasi', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('konsultasi-history')); ?>/"+id+"/edit";
    if(method == 'konslutasi-ongoing'){
    var url_form = "<?php echo e(url('konslutasi-ongoing')); ?>/"+id+"";
    }else if(method == 'konsultasi-finish'){
    var url_form = "<?php echo e(url('konsultasi-finish')); ?>/"+id+"";
    }else if(method == 'konsultasi-history'){
    var url_form = "<?php echo e(url('konsultasi-history')); ?>/"+id+"";
    }
    $.ajax({
            type:"get",
            url: url,
            success:function(data){
              $('.form-konsultasi').attr( 'action', url)
              $('.form-konsultasi #client_id').val(data.client_id)
              $('.form-konsultasi #service_id').val(data.service_id)
              $('.form-konsultasi #lawyer_id').val(data.lawyer_id)
              $('.form-konsultasi #rating').val(data.rating)
              $('.form-konsultasi #review').val(data.review)
              $('.form-konsultasi #status').val(data.status)
              $('.form-konsultasi #alasan_tolak').val(data.alasan_tolak);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/konsultasi/index.blade.php ENDPATH**/ ?>