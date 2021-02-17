
<?php $__env->startSection('title'); ?>
Pengaturan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Pengaturan</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Pengaturan</h6>
    <!-- <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalPengaturan">
        Tambah Pengaturan
    </a> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $setting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->name); ?></td>
            <?php if($m->id == 3): ?>
            <td><?php echo e($m->value); ?> Hari</td>
            <?php else: ?>
            <td>Rp. <?php echo number_format($m->value, 0, ',', '.'); ?></td>
            <?php endif; ?>
            <td><?php echo e($m->deskripsi); ?></td>
            <td>
                <a href="#" name="settings" style="color:white" class="badge bg-info editPengaturan" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalFaqEdit">Edit</a>
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
<!-- Modal Faq-->

<div class="modal fade" id="modalPengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengaturan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('settings')); ?>" method="post" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama Pengaturan" required>
        </div>
        <div class="form-group">
            <label>Value</label>
            <input type="text" class="form-control" name="value" placeholder="Nilai" required>
        </div>
        <div class="form-group">
            <label>Jawaban</label>
            <textarea row="5" class="form-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>
</div>

<!-- Modal Edit Faq-->
<div class="modal fade" id="modalFaqEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pengaturan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('settings')); ?>" method="post" class='form-pengaturan'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label>Nilai</label>
            <input type="text" class="form-control" name="value" id="value" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea row="5" class="form-control" name="deskripsi" id="deskripsi" required></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $('table tbody').on('click', '.editPengaturan', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    var url = "<?php echo e(url('settings')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"<?php echo e(url('')); ?>/"+method+'/'+ id + "/edit",
            success:function(data){
              $('.form-pengaturan').attr('action', url)
              $('.form-pengaturan #name').val(data.name)
              $('.form-pengaturan #value').val(data.value);
              $('.form-pengaturan #deskripsi').val(data.deskripsi);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/settings/index.blade.php ENDPATH**/ ?>