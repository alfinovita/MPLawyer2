
<?php $__env->startSection('title'); ?>
<?php echo e((request()->is('user-lawyer*')?'Lawyer':'Notaris')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<form action="<?php echo e(url('user-layanan/update/'.$user->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Edit Layanan <?php echo e($user->nama_lengkap); ?></h6>
        </div>
        <div class="modal-body">
            <h3>Service Yang di Layani</h3>
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group" style="border: 1px solid #e6e6e6;">
                <div class="m-3">
                    <img src="<?php echo e(asset($m['gambar'])); ?>" alt="<?php echo e($m['nama']); ?>" width="300px" class="img-thumbnail myImg">
                    <input type="hidden" value="<?php echo e($m['id']); ?>" name="service_id[]" class="form-control m-1">
                    <h3>Nama Layanan : <?php echo e($m['nama']); ?></h3>
                    <h4>Harga : </h4>
                    <input type="number" value="<?php echo e($m['harga']); ?>" name="harga[]" class="form-control m-1">
                    <h4>Harga Vicon : </h4>
                    <input type="number" value="<?php echo e($m['harga_vicon']); ?>" name="harga_vicon[]" class="form-control m-1">
                    <h4>Deskripsi : </h4>
                    <textarea name="deskripsi[]" class="form-control m-1"><?php echo e($m['deskripsi']); ?></textarea>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(url('user-notaris')); ?>" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button> 
        </div>
    </div>
</form>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/edit-service.blade.php ENDPATH**/ ?>