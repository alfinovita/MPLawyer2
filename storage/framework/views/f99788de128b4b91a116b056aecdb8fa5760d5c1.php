
<?php $__env->startSection('title'); ?>
Artikel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
.avatar { 
  background: url(blah.jpg) 50% 50% no-repeat; /* 50% 50% centers image in div */
  width: 40px;
  height: 40px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Artikel</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Artikel <?php echo e($artikel->judul); ?></h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Nama User</td>
                    <td>:</td>
                    <td><?php echo e($artikel->user->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Konten</td>
                    <td>:</td>
                    <td><?php echo e($artikel->content); ?></td>
                </tr>
                <tr>
                    <td>Tanggal Rilis</td>
                    <td>:</td>
                    <td><?php echo e($artikel->release_date); ?></td>
                </tr>
                <tr>
                    <td>Sumber</td>
                    <td>:</td>
                    <td><?php echo e($artikel->sumber); ?></td>
                </tr>
                
                <tr>
                    <td>Komentar</td>
                    <td>:</td>
                    <td>
                    <div class="scroll">
                    <?php $__currentLoopData = $artikel->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group" style="border: 1px solid #e6e6e6;">
                            <div class="m-2">
                                <?php if($m->user->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" alt="Avatar" style="border-radius: 100%;"class="avatar myImg">
                                <?php else: ?>
                                <img src="<?php echo e(asset($m->user->avatar)); ?>" alt="Avatar" style="border-radius: 100%;"class="avatar myImg">
                                <?php endif; ?>
                                <?php echo e($m->user['nama_lengkap']); ?>

                                <br><?php echo e($m['created_at']); ?></br>
                                <?php echo e($m['komentar']); ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>Like</td>
                    <td>:</td>
                    <td><?php echo e(count($artikel->like)); ?></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><img src="<?php echo e(asset($artikel->image)); ?>" alt="Berita Acara" width="600px" class="img-thumbnail myImg"></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/artikel/detail.blade.php ENDPATH**/ ?>