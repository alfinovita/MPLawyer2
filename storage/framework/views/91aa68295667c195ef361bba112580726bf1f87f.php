
<?php $__env->startSection('title'); ?>
Konfirmasi Client
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Konfirmasi Client</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Konfirmasi Client</h6>
    <!-- <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalUser">
        Tambah User
    </a> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $verified; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($m->user->nama_lengkap); ?></td>
            <td><?php echo e($m->user->email); ?></td>
            <td><?php echo e($m->user->telp); ?></td>
            <td><?php echo e($m->status); ?></td>
            <td>
                <a href="#" name="user-client/terima/" style="color:white" data-type="" value="" class="confirmation badge bg-success" id="<?php echo e($m->id); ?>">Terima</a>
                <a href="#" name="user-client/tolak/" style="color:white" data-type="text" value="Alasan Tolak" class="confirmation badge bg-danger" id="<?php echo e($m->id); ?>">Tolak</a>
                <a href="<?php echo e(url('client-konfirmasi/detail/'.$m->id)); ?>" style="color:white" class="badge bg-info">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/client-confirm.blade.php ENDPATH**/ ?>