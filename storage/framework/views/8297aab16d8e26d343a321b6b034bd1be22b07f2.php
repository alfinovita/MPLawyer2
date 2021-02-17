
<?php $__env->startSection('title'); ?>
Detail Pertemuan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Pertemuan</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail Pertemuan</h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Client</td>
                    <td>:</td>
                    <td><?php echo e($pertemuan->client->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Lawyer</td>
                    <td>:</td>
                    <td><?php echo e($pertemuan->lawyer->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    <?php if($pertemuan->status == true): ?>
                    Menunggu
                    <?php else: ?>
                    Tidak Aktif
                    <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td><?php echo e($pertemuan->tgl_pengajuan); ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo e($pertemuan->nama); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($pertemuan->email); ?></td>
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
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/pertemuan/show.blade.php ENDPATH**/ ?>