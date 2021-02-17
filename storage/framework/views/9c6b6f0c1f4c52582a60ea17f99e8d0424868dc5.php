
<?php $__env->startSection('title'); ?>
Detail Report
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Report</h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail Report</h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Judul Report</td>
                    <td>:</td>
                    <td><?php echo e($report->judul_report); ?></td>
                </tr>
                <tr>
                    <td>Penjelasan</td>
                    <td>:</td>
                    <td><?php echo e($report->penjelasan); ?></td>
                </tr>
                <tr>
                    <td>Client</td>
                    <td>:</td>
                    <td><?php echo e($report->client->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Lawyer</td>
                    <td>:</td>
                    <td><?php echo e($report->lawyer->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td><a href="<?php echo e(asset($report->file)); ?>" class="badge btn-info" style="color:white">Download File</a></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/report/show.blade.php ENDPATH**/ ?>