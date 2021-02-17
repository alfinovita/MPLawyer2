
<?php $__env->startSection('title'); ?>
Pengajuan Vicon
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Pengajuan Vicon</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Pengajuan Vicon</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Client</th>
            <th>Email</th>
            <th>Lawyer</th>
            <th>Durasi</th>
            <th>Tanggal Pengajuan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $vicon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($m->nama); ?></td>
            <td><?php echo e($m->email); ?></td>
            <td><?php echo e($m->lawyer->nama_lengkap); ?></td>
            <td><?php echo e($m->durasi); ?> Jam</td>
            <td><?php echo e($m->tgl_pengajuan); ?></td>
            <td><?php echo e($m->status); ?></td>
            <td>
                <a href="#" name="vicon/terima/" style="color:white" data-type="text" value="Link" class="confirmation badge bg-success" id="<?php echo e($m->id); ?>">Terima</a>
                <a href="#" name="vicon/tolak/" style="color:white" data-type="text" value="Alasan Tolak" class="confirmation badge bg-danger" id="<?php echo e($m->id); ?>">Tolak</a>
                <a href="<?php echo e(url('vicon/'.$m->id)); ?>" style="color:white" class="badge bg-info">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($vicon->links()); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/vicon/index.blade.php ENDPATH**/ ?>