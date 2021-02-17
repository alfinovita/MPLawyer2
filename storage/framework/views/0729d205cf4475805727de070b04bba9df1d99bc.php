
<?php $__env->startSection('title'); ?>
Penawaran
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Penawaran</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Judul Pertanyaan</th>
            <th>Pertanyaan</th>
            <th>Kategori Layanan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $penawaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->user->nama_lengkap); ?></td>
            <td><?php echo e($m->judul_pertanyaan); ?></td>
            <td><?php echo e($m->pertanyaan); ?></td>
            <td><?php echo e($m->kategori_layanan); ?></td>
            <td>
            <?php if($m->status == true): ?>
            Aktif
            <?php else: ?>
            Tidak Aktif
            <?php endif; ?>
            </td>
            <td>
            <a href="<?php echo e(request()->url('penawaran')); ?>/<?php echo e($m->id); ?>" name="penawaran" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($penawaran->links()); ?>

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
<script>
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/penawaran/index.blade.php ENDPATH**/ ?>