
<?php $__env->startSection('title'); ?>
Privasi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Edit Privasi</h6>
  </div>
    <form action="<?php echo e(url('privacy/'.$privacy->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="modal-body">
            <div class="form-group">
                <label>Konten</label><br>
                <textarea rows="25" cols="54" class="form-control summernote" name="content"><?php echo e($privacy->content); ?></textarea>
            </div>
        <a href="<?php echo e(url('privacy')); ?>" class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
  $('.summernote').summernote();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/privasi/edit.blade.php ENDPATH**/ ?>