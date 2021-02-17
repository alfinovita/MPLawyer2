
<?php $__env->startSection('title'); ?>
Report
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
        
          <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->judul_report); ?></td>
            <td><?php echo e($m->penjelasan); ?></td>
            <td><?php echo e($m->client->nama_lengkap); ?></td>
            <td><?php echo e($m->lawyer->nama_lengkap); ?></td>
            <td><a href="<?php echo e($m->file); ?>" class="badge btn-info" style="color:white">Download File</a></td>
 

            <td>
            <a href="<?php echo e(request()->url('report')); ?>/<?php echo e($m->id); ?>" name="report" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
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
  
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/report/index.blade.php ENDPATH**/ ?>