
<?php $__env->startSection('title'); ?>
Layanan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Layanan</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Layanan</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalLayanan">
        Tambah Layanan
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->nama); ?></td>
            <td><img src="<?php echo e(asset($m->image)); ?>" alt="Avatar" width="200px" class="img-thumbnail"></td>
            <td>
            <?php if($m->status == true): ?>
            Aktif
            <?php else: ?>
            Tidak Aktif
            <?php endif; ?>
            </td>
            <td>
                <a class="activation btn btn-warning" data-value="<?php echo e($m->status); ?>" id="<?php echo e($m->id); ?>" name="layanan/status/">Test</a>
                <a href="#" name="layanan" style="color:white" class="btn btn-info editLayanan" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalLayananEdit">Edit</a>
                <a href="#" name="layanan" class="delete btn btn-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
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
<!-- Modal Layanan-->

<div class="modal fade" id="modalLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('layanan')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" class="form-control form-control-layanan" name="nama" id="nama" placeholder="Nama" required>
        </div>
        <div class="form-group" id="gambar">
            <label>Avatar</label><br>
            <small style="color:red">*max upload 2MB</small>
            <input type="file" class="form-control form-control-layanan" name="image" id="image">
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

<div class="modal fade" id="modalLayananEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Layanan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('layanan')); ?>" method="post" enctype="multipart/form-data" class='form-layanan'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" class="form-control form-control-layanan" name="nama" id="nama" placeholder="Nama" required>
        </div>
        <div class="form-group" id="gambar">
            <label>Avatar</label><br>
            <img src="" width="200px" alt="" class="img-thumbnail image"><br>
            <small style="color:red">*max upload 2MB</small><br>
            <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
            <input type="file" class="form-control form-control-layanan" name="image" id="image">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-layanan" name="status" id="status" placeholder="Status" required>
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
  //$('.editLayanan').on('click', function(){
    $('table tbody').on('click', '.editLayanan', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('layanan')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/layanan/"+ id + "/edit",
            success:function(data){
              $('.form-layanan').attr('action', url)
              $('.form-layanan #nama').val(data.nama)
              $(".form-layanan .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.image )
              $('.form-layanan #status').val(data.status);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/layanan/index.blade.php ENDPATH**/ ?>