
<?php $__env->startSection('title'); ?>
Konfirmasi Membership
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Konfirmasi Membership</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Konfirmasi Membership</h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="200">Nama</td>
                    <td width="10">:</td>
                    <td><?php echo e($user->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($user->email); ?></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><?php echo e($user->telp); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo e($user->alamat); ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?php if($user->jenis_kelamin == 'PR'): ?>
                        Perempuan
                        <?php else: ?>
                        Laki-laki
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tipe Akun</td>
                    <td>:</td>
                    <td><?php echo e($user->type); ?></td>
                </tr>
                <tr>
                    <td>Status Akun</td>
                    <td>:</td>
                    <td>
                        <?php if($user->pengajuan->status == 'WAITING'): ?>
                        Menungu
                        <?php elseif($user->pengajuan->status == 'WAITING_PAYMENT'): ?>
                        Menunggu Pembayaran
                        <?php elseif($user->pengajuan->status == 'PAID'): ?>
                        Pembayaran Berhasil
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Status Verifikasi</td>
                    <td>:</td>
                    <td>
                        <?php if($user->verified == true): ?>
                        Sudah Verifikasi
                        <?php else: ?>
                        Belum Verifikasi
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td>:</td>
                    <td><?php echo e($user->pengajuan->created_at); ?></td>
                </tr>
                <tr>
                    <td>
                        <div class="modal-body">
                            <label for="">Avatar</label>
                            <div class="form-group">
                                <?php if($user->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($user->avatar)); ?>" alt="Avatar" width="300px" class="img-thumbnail myImg">
                                <?php endif; ?>
                            </div>
                        </div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/detailmember.blade.php ENDPATH**/ ?>