
<?php $__env->startSection('title'); ?>
Konfirmasi Membership
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Konfirmasi Membership</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Konfirmasi Membership</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Status Akun</th>
            <th>Status Verifikasi</th>
            <th>Tanggal Pengajuan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $pengajuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($m->user->nama_lengkap); ?></td>
            <td><?php echo e($m->user->email); ?></td>
            <td><?php echo e($m->user->telp); ?></td>
            <td><?php echo e($m->user->alamat); ?></td>
            <td>
                        <?php if($m->status == 'WAITING'): ?>
                        Menungu
                        <?php elseif($m->status == 'WAITING_PAYMENT'): ?>
                        Menunggu Pembayaran
                        <?php elseif($m->status == 'PAID'): ?>
                        Pembayaran Berhasil
                        <?php endif; ?>
            </td>
            <td>
              <?php if($m->user->verified == true): ?>
              Verified
              <?php else: ?>
              Belum Verified
              <?php endif; ?>
            </td>
            <td><?php echo e($m->created_at); ?></td>
            <td>
            <a href="<?php echo e(url('pengajuan-lawyer/detail/'.$m->id)); ?>" style="color:white" class="badge bg-success">Detail</a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($pengajuan->links()); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/membership.blade.php ENDPATH**/ ?>