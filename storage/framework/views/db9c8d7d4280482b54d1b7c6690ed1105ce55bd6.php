
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('slider-client*')?'Client':(request()->is('slider-lawyer*')?'Lawyer':'Notaris')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar <?php echo e(request()->is('slider-client*')?'Client':(request()->is('slider-lawyer*')?'Lawyer':'Notaris')); ?></h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar <?php echo e(request()->is('slider-client*')?'Client':(request()->is('slider-lawyer*')?'Lawyer':'Notaris')); ?></h6>
    <?php if(request()->is('slider-notaris*')): ?>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalslider">
        Tambah Notaris
    </a>
    <?php endif; ?>
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
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->judul); ?></td>
            <td><?php echo e($m->deskripsi); ?></td>
            <td><img src="<?php echo e(asset($m->image)); ?>" alt="image" width="200px" class="img-thumbnail"></td>
            <td>
            <a href="#" name="slider/status/" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>" value="<?php echo e($m->status); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak Aktif'); ?></a></td>
            <td>
                <a href="#" name="<?php echo e(request()->is('slider-client*')?'slider-client/status/':'slider-lawyer/status/'); ?>" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>" value="<?php echo e($m->status); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak Aktif'); ?></a>
                <a href="<?php echo e(request()->is('slider-client*')?url('slider-client'):(request()->is('slider-lawyer*')?url('slider-lawyer'):url('slider-notaris'))); ?>/<?php echo e($m->id); ?>" name="slider" style="color:white" class="badge bg-success">Detail</a>
                <a href="#" name="<?php echo e(request()->is('slider-client*')?'slider-client':(request()->is('slider-lawyer*')?'slider-lawyer':'slider-notaris')); ?>" style="color:white" class="badge bg-info editslider" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalsliderEdit">Edit</a>
                <?php if(request()->is('slider-notaris*')): ?>
                <a href="<?php echo e(url('slider-notaris/filled/'.$m->id)); ?>" style="color:white" class="badge bg-<?php echo e(($m->verified == false)?'danger':'info'); ?>">Lengkapi Data</a>
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($slider->links()); ?>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<!-- Modal slider Edit-->
<div class="modal fade" id="modalsliderEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit slider</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(url('slider')); ?>" method="post" enctype="multipart/form-data" class='form-slider'>
          <?php echo method_field('put'); ?>
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control form-control-slider" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control form-control-slider" name="email" id="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
              <label>Telpon</label>
              <input type="text" class="form-control form-control-slider" name="telp" id="telp" placeholder="Telp" required>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control form-control-slider" name="alamat" id="alamat" placeholder="Alamat" required>
          </div>
          <?php if(request()->is('slider-lawyer*')): ?>
          <div class="form-group">
              <label>Gelar</label>
              <input type="text" class="form-control form-control-slider" name="gelar" id="gelar" placeholder="Gelar" required>
          </div>
          <?php endif; ?>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="">Pilih</option>
                <option value="LK" id="jenis_kelamin_lk">Laki-laki</option>
                <option value="PR" id="jenis_kelamin_pr">Perempuan</option>
              </select>
          </div>
          <div class="form-group" id="avatar">
              <label>Avatar</label><br>
              <img src="" width="200px" alt="" class="img-thumbnail image"><br>
              <small style="color:red">*max upload 2MB</small><br>
              <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
              <input type="file" class="form-control form-control-slider" name="image" id="image">
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
<!-- slider Modal -->
<div class="modal fade" id="modalslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit slider</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(url('slider-notaris')); ?>" method="post" enctype="multipart/form-data" class='form-slider'>
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control form-control-slider" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control form-control-slider" name="email" id="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
              <label>Telpon</label>
              <input type="text" class="form-control form-control-slider" name="telp" id="telp" placeholder="Telp" required>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control form-control-slider" name="alamat" id="alamat" placeholder="Alamat" required>
          </div>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="">Pilih</option>
                <option value="LK" id="jenis_kelamin_lk">Laki-laki</option>
                <option value="PR" id="jenis_kelamin_pr">Perempuan</option>
              </select>
          </div>
          <div class="form-group" id="avatar">
              <label>Avatar</label><br>
              <small style="color:red">*max upload 2MB</small><br>
              <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
              <input type="file" class="form-control form-control-slider" name="image" id="image">
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
  // $('.editslider').on('click', function(){
    $('table tbody').on( 'click', '.editslider', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    var url = "<?php echo e(url('slider-lawyer')); ?>/"+id+"/edit";
    if(method == 'slider-lawyer'){
    var url_form = "<?php echo e(url('slider-lawyer')); ?>/"+id+"";
    }else if(method == 'slider-client'){
    var url_form = "<?php echo e(url('slider-client')); ?>/"+id+"";
    }else if(method == 'slider-notaris'){
    var url_form = "<?php echo e(url('slider-notaris')); ?>/"+id+"";
    }
    console.log(url)
    $.ajax({
            type:"get",
            url: url,
            success:function(data){
              $('.form-slider').attr( 'action', url_form)
              if(data.jenis_kelamin == 'PR'){
                $('.form-slider #jenis_kelamin_pr').attr('selected', true)
              }
              else{
                $('.form-slider #jenis_kelamin_lk').attr('selected', true)
              }
              $('.form-slider #email').val(data.email)
              $('.form-slider #telp').val(data.telp)
              $('.form-slider #nama_lengkap').val(data.nama_lengkap)
              if(data.role == 'LAWYER'){
                $('.form-slider #gelar').val(data.lawyer_detail.gelar)
              }
              if(data.avatar == null){
                $(".form-slider .image").attr('src', "<?php echo e(url('public/avatar-default1.png')); ?>" )
              }else{
                $(".form-slider .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.avatar )
              }
              $('.form-slider #alamat').val(data.alamat)
              $('.form-slider #jenis_kelamin').val(data.jenis_kelamin);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/slidern/index.blade.php ENDPATH**/ ?>