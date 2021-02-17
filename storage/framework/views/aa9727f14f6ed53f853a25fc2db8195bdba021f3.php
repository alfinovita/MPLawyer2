
<?php $__env->startSection('title'); ?>
Notaris
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Notaris <?php echo e($user->nama_lengkap); ?></h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<form action="<?php echo e(url('user-notaris/filled/'.$user->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Formulir Notaris</h6>
    </div>
    <div class="row">
        <div class="modal-body m-2 col-6">
            <div class="form-group">
                <label>No KTP</label><br>
                <input type="number" value="<?php echo e($user->no_ktp); ?>" name="no_ktp" class="form-control">
            </div>
            <div class="form-group">
                <label>KTP</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="ktp">
                <img src="<?php echo e(asset($user->ktp)); ?>" alt="KTP" width="200px" class="img-thumbnail myImg">
            </div>
            <div class="form-group">
                <label>Selfie KTP</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="selfie_ktp">
                <img src="<?php echo e(asset($user->selfie_ktp)); ?>" alt="Selfie KTP" width="200px" class="img-thumbnail myImg">
            </div>
            <div class="form-group">
                <label>Avatar</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="avatar">
                <img src="<?php echo e(asset($user->avatar)); ?>" alt="Avatar" width="200px" class="img-thumbnail myImg">
            </div>
        </div>
        <div class="modal-body col-5">
            <div class="form-group">
                <label>NPWP</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="npwp">
                <img src="<?php echo e(asset($user->npwp)); ?>" alt="NPWP" width="200px" class="img-thumbnail myImg">
            </div>
            <div class="form-group">
                <label>NIB</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="nib">
                <img src="<?php echo e(asset($user->nib)); ?>" alt="NIB" width="200px" class="img-thumbnail myImg">
            </div>
            <div class="form-group">
                <label>Kartu Peradi</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="kartu_peradi">
                <img src="<?php echo e(asset($user->lawyer_detail->kartu_peradi)); ?>" alt="Kartu Peradi" width="200px" class="img-thumbnail myImg">
            </div>
            <div class="form-group">
                <label>Berita Acara</label><br>
                <small style="color:red">*max upload 2MB</small><br>
                <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
                <input type="file" class="form-control" name="berita_acara">
                <img src="<?php echo e(asset($user->lawyer_detail->berita_acara)); ?>" alt="Berita Acara" width="200px" class="img-thumbnail myImg">
            </div>
        <a href="<?php echo e(url('user-notaris')); ?>" class="btn btn-default">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
                
    </div>
    </div>
</form>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/view-filled.blade.php ENDPATH**/ ?>