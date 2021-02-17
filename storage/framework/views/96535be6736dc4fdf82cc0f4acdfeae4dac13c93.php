
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('kategori-client*')?'Layanan Client':'Layanan Advokat'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar <?php echo e(request()->is('kategori-client*')?'Layanan Client':'Layanan Advokat'); ?></h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar <?php echo e(request()->is('kategori-client*')?'Layanan Client':'Layanan Advokat'); ?></h6>
    <!-- <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalKategori">
        Tambah <?php echo e(request()->is('kategori-client*')?'Layanan Client':'Layanan Lawyer'); ?>

    </a> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->nama); ?></td>
            <td><img src="<?php echo e(asset($m->image)); ?>" alt="Gambar" width="200px" class="img-thumbnail myImg"></td>
            <td><?php echo e($m->deskripsi); ?></td>
            <td>
            <?php if($m->status == true): ?>
            Aktif
            <?php else: ?>
            Tidak Aktif
            <?php endif; ?>
            </td>
            <td>
                <a href="#" name="<?php echo e(request()->is('kategori-client*')?'kategori-client/status/':'kategori-lawyer/status/'); ?>" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>" value="<?php echo e($m->status); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak Aktif'); ?></a>
                <a href="#" name="<?php echo e(request()->is('kategori-client*')?'kategori-client':'kategori-lawyer'); ?>" style="color:white" class="badge bg-info editKategori" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalKategoriEdit">Edit</a>
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
<!-- Modal Kategori-->

<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(request()->is('kategori-client*')?url('kategori-client'):url('kategori-lawyer')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" class="form-control" name="nama" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Gambar</label><br>
            <small style="color:red">*max upload 2MB</small>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" cols="30" rows="10" required></textarea>
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

<div class="modal fade" id="modalKategoriEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('kategori')); ?>" method="post" enctype="multipart/form-data" class='form-kategori'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="nama" class="form-control" name="nama" id="nama" placeholder="Nama" required>
        </div>
        <div class="form-group" id="gambar">
            <label>Gambar</label><br>
            <img src="" width="200px" alt="" class="img-thumbnail image"><br>
            <small style="color:red">*max upload 2MB</small><br>
            <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>
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
  //$('.editKategori').on('click', function(){
    $('table tbody').on('click', '.editKategori', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('')); ?>/"+method+'/'+id;
    $.ajax({
            type:"get",
            url:"<?php echo e(url('')); ?>/" + method + '/' + id + "/edit",
            success:function(data){
              $('.form-kategori').attr('action', url)
              $('.form-kategori #nama').val(data.nama)
              $(".form-kategori .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.image )
              $('.form-kategori #deskripsi').val(data.deskripsi);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/kategori/index.blade.php ENDPATH**/ ?>