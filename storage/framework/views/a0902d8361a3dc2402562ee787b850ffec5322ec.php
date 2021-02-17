
<?php $__env->startSection('title'); ?>
Slider Lawyer
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Slider Lawyer</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Slider Lawyer</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalSliderLawyer">
        Tambah Slider Lawyer
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th width="10px">No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($m->judul); ?></td>
            <td><?php echo e($m->deskripsi); ?></td>
            <td><img src="<?php echo e(asset($m->image)); ?>" alt="Avatar" width="200px" class="img-thumbnail"></td>
            <td>
            <?php if($m->status == true): ?>
            Aktif
            <?php else: ?>
            Tidak Aktif
            <?php endif; ?>
            </td>
            <td>
                <a class="activation btn btn-warning" data-value="<?php echo e($m->status); ?>" id="<?php echo e($m->id); ?>" name="lawyer/status/">Test</a>
                <a href="#" name="slider" style="color:white" class="btn btn-info editSlider" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalSliderLawyerEdit">Edit</a>
                <a href="#" name="slider" class="delete btn btn-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
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
<!-- Modal Slider-->

<div class="modal fade" id="modalSliderLawyer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Slider Lawyer</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('lawyer')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control form-control-slider" name="judul" id="judul" placeholder="Judul" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control form-control-slider" name="deskripsi" id="deskripsi" placeholder="Deskripsi" required>
        </div>
        <div class="form-group" id="image">
            <label>Avatar</label><br>
            <small style="color:red">*max upload 2MB</small>
            <input type="file" class="form-control form-control-slider" name="gambar" id="gambar">
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-slider" name="status" id="status" placeholder="Status" required>
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

<div class="modal fade" id="modalSliderLawyerEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Slider Lawyer</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('lawyer')); ?>" method="post" enctype="multipart/form-data" class='form-lawyer'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control form-control-lawyer" name="judul" id="judul" placeholder="Judul" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control form-control-lawyer" name="deskripsi" id="deskripsi" placeholder="Deskripsi" required>
        </div>
        <div class="form-group" id="image">
            <label>Avatar</label><br>
            <img src="" width="200px" alt="" class="img-thumbnail image"><br>
            <small style="color:red">*max upload 2MB</small><br>
            <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
            <input type="file" class="form-control form-control-lawyer" name="gambar" id="gambar">
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
  //$('.editSlider').on('click', function(){
    $('table tbody').on('click', '.editSlider', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('lawyer')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/lawyer/"+ id + "/edit",
            success:function(data){
              $('.form-lawyer').attr('action', url)
              $('.form-lawyer #judul').val(data.judul)
              $('.form-lawyer #deskripsi').val(data.deskripsi)
              $(".form-lawyer .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.image );
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/slider/lawyer.blade.php ENDPATH**/ ?>