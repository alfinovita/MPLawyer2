
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
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Pengajuan Vicon <?php echo e($vidcon->client->nama_lengkap); ?></h6>
    </div>
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama Client</td>
                    <td width="10">:</td>
                    <td><?php echo e($vidcon->nama); ?></td>
                </tr>
                <tr>
                    <td>Nama Lawyer</td>
                    <td>:</td>
                    <td><?php echo e($vidcon->lawyer->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($vidcon->email); ?></td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td>:</td>
                    <td><?php echo e($vidcon->durasi); ?> Jam</td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td><?php echo e(date('d-m-Y H:m', strtotime($vidcon->tgl_pengajuan))); ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <?php if($vidcon->status == 'WAITING'): ?>
                        Menunggu Konfirmasi
                        <?php elseif($vidcon->status == 'WAITING_PAYMENT'): ?>
                        Menunggu Pembayaran
                        <?php elseif($vidcon->status == 'PAID'): ?>
                        Sudah Bayar
                        <?php elseif($vidcon->status == 'TOLAK'): ?>
                        Ditolak
                        <?php elseif($vidcon->status == 'CONFIRM'): ?>
                        Terkonfirmasi
                        <?php elseif($vidcon->status == 'FINISH'): ?>
                        Selesai
                        <?php endif; ?></td>
                </tr>
                <?php if($vidcon->alasan_tolak ==''): ?>
                <?php else: ?>
                <tr>
                    <td>Alasan Tolak</td>
                    <td>:</td>
                    <td><?php echo e($vidcon->alasan_tolak); ?></td>
                </tr>
                <?php endif; ?>
                
                <?php if($vidcon->link ==''): ?>
                <?php else: ?>
                <tr>
                    <td>Link</td>
                    <td>:</td>
                    <td><?php echo e($vidcon->link); ?></td>
                </tr>
                <?php endif; ?>
                
                <tr>
                    <td>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
            </table>
            <div class="modal-body">
                            <label for="">Avatar Lawyer</label>
                            <div class="form-group">
                                <?php if($vidcon->lawyer->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($vidcon->lawyer->avatar)); ?>" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="modal-body">
                            <label for="">Avatar Client</label>
                            <div class="form-group">
                                <?php if($vidcon->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($vidcon->client->avatar)); ?>" alt="Avatar" width="300px" height="300px" class="img-thumbnail myImg">
                                <?php endif; ?>
                            </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/vidcon/detail.blade.php ENDPATH**/ ?>