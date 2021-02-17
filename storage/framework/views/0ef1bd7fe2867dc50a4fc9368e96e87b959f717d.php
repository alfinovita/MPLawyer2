
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('pembayaran-berhasil*')?'Pembayaran Berhasil':'Pembayaran Tertunda'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail <?php echo e(request()->is('pembayaran-berhasil*')?'Pembayaran Berhasil':'Pembayaran Tertunda'); ?></h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline"><?php echo e(request()->is('pembayaran-berhasil*')?'Pembayaran Berhasil':'Pembayaran Tertunda'); ?></h6>
    </div>
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama</td>
                    <td width="10">:</td>
                    <td><?php echo e($pembayaran->client->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td width="200">Email</td>
                    <td width="10">:</td>
                    <td><?php echo e($pembayaran->client->email); ?></td>
                </tr>                
                <tr>
                    <td width="200">Telepon</td>
                    <td width="10">:</td>
                    <td><?php echo e($pembayaran->client->telp); ?></td>
                </tr>                
                <tr>
                    <td width="200">Alamat</td>
                    <td width="10">:</td>
                    <td><?php echo e($pembayaran->client->alamat); ?></td>
                </tr>
                <tr>
                    <td width="200">Kode Pembayaran</td>
                    <td width="10">:</td>
                    <td><?php echo e($pembayaran->kode_pembayaran); ?></td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td>:</td>
                    <td>Rp. <?php echo number_format($pembayaran->amount, 0, ',', '.'); ?></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td><?php if($pembayaran->type == 'VICON'): ?>
                        Pengajuan Video Conference
                        <?php elseif($pembayaran->type == 'PENDAMPINGAN'): ?>
                        Pengajuan Pendampingan
                        <?php elseif($pembayaran->type == 'PERTEMUAN'): ?>
                        Pengajuan Pertemuan
                        <?php elseif($pembayaran->type == 'TERTULIS'): ?>
                        Pengajuan Layanan Tertulis
                        <?php elseif($pembayaran->type == 'LIVE_CHAT'): ?>
                        Layanan Live Chat
                        <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>:</td>
                    <td>
                    <?php if($pembayaran->type == 'MEMBERSHIP'): ?>
                    <?php echo e($pembayaran->pengajuan->status); ?>

                    <?php elseif($pembayaran->type == 'LIVE_CHAT'): ?>
                    <?php echo e($pembayaran->chat->status); ?>

                    <?php elseif($pembayaran->type == 'PENDAMPINGAN'): ?>
                    <?php echo e($pembayaran->pendampingan->status); ?>

                    <?php elseif($pembayaran->type == 'PERTEMUAN'): ?>
                    <?php echo e($pembayaran->pertemuan->status); ?>

                    <?php elseif($pembayaran->type == 'TERTULIS'): ?>
                    <?php echo e($pembayaran->chat->status); ?>

                    <?php elseif($pembayaran->type == 'VICON'): ?>
                    <?php echo e($pembayaran->vicon->status); ?>

                    <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo e($pembayaran->status); ?></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <label for="">Avatar</label>
                            <div class="form-group">
                                <?php if($pembayaran->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($pembayaran->client->avatar)); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/pembayaran/detail.blade.php ENDPATH**/ ?>