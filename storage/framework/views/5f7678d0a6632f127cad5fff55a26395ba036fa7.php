
<?php $__env->startSection('title'); ?>
Pengajuan Vicon
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pengajuan Vicon</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Pengajuan Vicon <?php echo e($vicon->nama_lengkap); ?></h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Nama Client</td>
                    <td>:</td>
                    <td><?php echo e($vicon->nama); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($vicon->email); ?></td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td>:</td>
                    <td><?php echo e($vicon->durasi); ?> Jam</td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td><?php echo e($vicon->tgl_pengajuan); ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <label for="">Avatar Lawyer</label>
                            <div class="form-group">
                                <?php if($vicon->lawyer->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($vicon->lawyer->avatar)); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/vicon/detail.blade.php ENDPATH**/ ?>