
<?php $__env->startSection('title'); ?>
Tertulis
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Tertulis</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Tertulis <?php echo e($tertulis->client->nama_lengkap); ?></h6>
    </div>
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama</td>
                    <td width="10">:</td>
                    <td><?php echo e($tertulis->client->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td width="200">Nama Lawyer</td>
                    <td width="10">:</td>
                    <td><?php echo e($tertulis->lawyer->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Option</td>
                    <td>:</td>
                    <td><?php echo e($tertulis->option); ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <?php if($tertulis->status == 'WAITING'): ?>
                        MENUNGGU
                        <?php elseif($tertulis->status == 'TOLAK'): ?>
                        TOLAK
                        <?php elseif($tertulis->status == 'FINISH'): ?>
                        SELESAI
                        <?php elseif($tertulis->status == 'PAID'): ?>
                        SELESAI PEMBAYARAN
                        <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td><?php echo e(date('d-m-Y H:m', strtotime($tertulis->updated_at))); ?></td>
                </tr>
                <tr>
                    <td>Alasan Tolak</td>
                    <td>:</td>
                    <td><?php echo e($tertulis->alasan_tolak); ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <label for="">Avatar Client</label>
                            <div class="form-group">
                                <?php if($tertulis->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" length="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($tertulis->client->avatar)); ?>" alt="Avatar" width="300px" length="300px" class="img-thumbnail myImg">
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/tertulis/detail.blade.php ENDPATH**/ ?>