
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('user-client*')?'Client':'Lawyer'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail <?php echo e(request()->is('user-client*')?'Client':'Lawyer'); ?></h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline"><?php echo e(request()->is('user-client*')?'Client':'Lawyer'); ?> <?php echo e($user->nama_lengkap); ?></h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo e($user->email); ?></td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td>:</td>
                    <td><?php echo e($user->telp); ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo e($user->alamat); ?></td>
                </tr>
                <?php if($user->role == 'LAWYER'): ?>
                <tr>
                    <td>Gelar</td>
                    <td>:</td>
                    <td><?php echo e($user->lawyer_detail->gelar); ?></td>
                </tr>
                <tr>
                    <td>Bio</td>
                    <td>:</td>
                    <td><?php echo e($user->lawyer_detail->bio); ?></td>
                </tr>
                <tr>
                    <td>Probono Status</td>
                    <td>:</td>
                    <td>
                        <?php if($user->lawyer_detail->probono == true): ?>
                        Aktif
                        <?php else: ?>
                        Tidak Aktif
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td>Status Akun</td>
                    <td>:</td>
                    <td>
                        <?php if($user->status == true): ?>
                        Aktif
                        <?php else: ?>
                        Tidak Aktif
                        <?php endif; ?>
                    </td>
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
                <?php if($user->role == 'LAWYER'): ?>
                <tr>
                    <td>Membership</td>
                    <td>:</td>
                    <td>
                        <?php if($user->lawyer_detail->member_expired == ''): ?>
                        Belum Member
                        <?php else: ?>
                        <?php echo e($user->lawyer_detail->member_expired); ?>

                        <?php endif; ?>
                    </td>
                </tr>
                <?php endif; ?>
                <?php if($user->verified == true): ?>
                <tr>
                    <td>No KTP</td>
                    <td>:</td>
                    <td><?php echo e($user->no_ktp); ?></td>
                </tr>
                <?php endif; ?>
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
                        <?php if(request()->is('client-konfirmasi*')): ?>
                        <div class="modal-body">
                            <label for="">KTP</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($id->ktp)); ?>" alt="KTP" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                        <div class="modal-body">
                            <label for="">Selfie KTP</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($id->ktp)); ?>" alt="Selfie KTP" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($user->role == 'CLIENT' && $user->verified == true): ?>
                        <div class="modal-body">
                            <label for="">KTP</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($user->ktp)); ?>" alt="KTP" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                        <div class="modal-body">
                            <label for="">Selfie KTP</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($user->ktp)); ?>" alt="Selfie KTP" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($user->role == 'LAWYER'): ?>
                        <div class="modal-body">
                            <label for="">Kartu Peradi</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($user->lawyer_detail->kartu_peradi)); ?>" alt="Kartu Peradi" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                        <div class="modal-body">
                            <label for="">Berita Acara</label>
                            <div class="form-group">
                                <img src="<?php echo e(asset($user->lawyer_detail->berita_acara)); ?>" alt="Berita Acara" width="300px" class="img-thumbnail myImg">
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td style="border: 1px solid #e6e6e6;">
                        <h3>Service Yang di Layani</h3>
                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group" style="border: 1px solid #e6e6e6;">
                            <div class="m-3">
                                <img src="<?php echo e(asset($m['gambar'])); ?>" alt="<?php echo e($m['nama']); ?>" width="300px" class="img-thumbnail myImg">
                                <h3>Nama Layanan : <?php echo e($m['nama']); ?></h3>
                                <h4>Harga : Rp. <?php echo number_format($m['harga'], 0, ',', '.'); ?></h4>
                                <h4>Harga Vicon : Rp. <?php echo number_format($m['harga_vicon'], 0, ',', '.'); ?></h4>
                                <h4>Deskripsi : <?php echo e($m['deskripsi']); ?></h4>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <?php endif; ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/detail.blade.php ENDPATH**/ ?>