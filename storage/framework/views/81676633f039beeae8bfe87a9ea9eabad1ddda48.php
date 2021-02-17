
<?php $__env->startSection('title'); ?>
Privasi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Privasi</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail Privasi</h6>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span onclick="history.back(-1)">×</span>
        </button>
  </div>
    <div class="modal-body">
    <div class="form-group">
        <label>Konten</label><br>
        <textarea rows="25", cols="54" class="form-control"><?php echo e($privacy->content); ?></textarea></div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/privasi/show.blade.php ENDPATH**/ ?>