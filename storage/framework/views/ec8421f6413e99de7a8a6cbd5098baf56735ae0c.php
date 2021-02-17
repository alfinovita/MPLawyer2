
<?php $__env->startSection('title'); ?>
Bantuan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Bantuan</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Bantuan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama Kontak</th>
            <th>Kontak</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $help; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->name_contact); ?></td>
            <td><?php echo e($m->contact); ?></td>
            <td>
                <a href="#" name="help" style="color:white" class="badge bg-info editHelp" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalHelpEdit">Edit</a>
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
<!-- Modal Help-->

<div class="modal fade" id="modalHelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bantuan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('help')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama Kontak</label>
            <input type="text" class="form-control form-control-help" name="name_contact" id="name_contact" placeholder="Nama Kontak" required>
        </div>
        <div class="form-group">
            <label>Kontak</label>
            <input type="text" class="form-control form-control-help" name="contact" id="contact" placeholder="Kontak" required>
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

<!-- Modal Edit Help-->
<div class="modal fade" id="modalHelpEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bantuan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('help')); ?>" method="post" enctype="multipart/form-data" class='form-help'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama Kontak</label>
            <input type="text" class="form-control form-control-help" name="name_contact" id="name_contact" placeholder="Nama Kontak" required>
        </div>
        <div class="form-group">
            <label>Kontak</label>
            <input type="text" class="form-control form-control-help" name="contact" id="contact" placeholder="Kontak" required>
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
  //$('.editHelp').on('click', function(){
    $('table tbody').on('click', '.editHelp', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('help')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"<?php echo e(url('')); ?>/"+method+'/'+ id + "/edit",
            success:function(data){
              $('.form-help').attr('action', url)
              $('.form-help #name_contact').val(data.name_contact)
              $('.form-help #contact').val(data.contact);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/help/index.blade.php ENDPATH**/ ?>