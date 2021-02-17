
<?php $__env->startSection('title'); ?>
Peraturan
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
    <h1 class="h3 mb-2 text-gray-800">Detail Peraturan</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Peraturan <?php echo e($peraturan->judul); ?></h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td width="300">Nama Peraturan</td>
                    <td width="50">:</td>
                    <td ><?php echo e($peraturan->nama_peraturan); ?></td>
                </tr>
                <tr>
                    <td width="300">Status</td>
                    <td width="50">:</td>
                    <td ><?php if($peraturan->status == true): ?>
                        Aktif
                        <?php else: ?>
                        Tidak Aktif
                        <?php endif; ?></td>
                </tr>
                <?php $__currentLoopData = $peraturan->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['nomer']); ?>

                    </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['judul']); ?>

                    </td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['jenis']); ?>

                    </td>
                </tr>
                <tr>
                    <td>Instansi</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['instansi']); ?>

                    </td>
                </tr>
                <tr>
                    <td>Tanggal Ditetapkan</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['tgl_ditetapkan']); ?>

                    </td>
                </tr>
                <tr>
                    <td>No BN</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['no_bn']); ?>

                    </td>
                </tr>
                <tr>
                    <td>No TBN</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['no_tbn']); ?>

                    </td>
                </tr>
                <tr>
                    <td>Tanggal Diundingkan</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['tgl_diundingkan']); ?>

                    </td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td>
                    <?php echo e($m['file']); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/peraturan/detailpr.blade.php ENDPATH**/ ?>