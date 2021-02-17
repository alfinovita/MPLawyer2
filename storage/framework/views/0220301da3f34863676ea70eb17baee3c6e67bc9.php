
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('user-client*')?'Client':(request()->is('user-lawyer*')?'Advokat':'Notaris')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-md-9">
<h1 class="h3 mb-4 text-gray-800">Daftar <?php echo e(request()->is('user-client*')?'Client':(request()->is('user-lawyer*')?'Advokat':'Notaris')); ?></h1>
</div>
    <div class="col-md-3">
    <form action="<?php echo e(request()->is('user-client*')?url('user-client'):(request()->is('user-lawyer*')?url('user-lawyer'):url('user-notaris'))); ?>" name="cari" method="GET">
      <div class="row mb-1">
        <div class="input-group">
          <input type="text" name="search" class="form-control col-md-9" placeholder="Cari <?php echo e(request()->is('user-client*')?'Client':(request()->is('user-lawyer*')?'Lawyer':'Notaris')); ?>">
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-danger">Cari</button>
            </span>
        </div>
      </div>
      </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar <?php echo e(request()->is('user-client*')?'Client':(request()->is('user-lawyer*')?'Advokat':'Notaris')); ?></h6>
    <?php if(request()->is('user-notaris*')): ?>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalUser">
        Tambah Notaris
    </a>
    <?php endif; ?>
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
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tipe Akun</th>
            <th>Status</th>
            <th>Status Verifikasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($m->nama_lengkap); ?></td>
            <td><?php echo e($m->email); ?></td>
            <td><?php echo e($m->telp); ?></td>
            <td><?php echo e($m->alamat); ?></td>
            <td>
              <?php if($m->jenis_kelamin == 'PR'): ?>
              Perempuan
              <?php else: ?>
              Laki-laki
              <?php endif; ?>
            </td>
            <td><?php echo e($m->type); ?></td>
            <td>
              <?php if($m->status == true): ?>
              AKTIF
              <?php else: ?>
              TIDAK AKTIF
              <?php endif; ?>
              <?php if($m->status_app == true): ?>
                <a href="#" style="color:white" class="badge bg-warning">Online</a>
              <?php else: ?>
              <?php endif; ?>
            </td>
            <td>
              <?php if($m->verified == true): ?>
              Verified
              <?php else: ?>
              Belum Verified
              <?php endif; ?>
            </td>
            <td>
                <a href="#" name="<?php echo e(request()->is('user-client*')?'user-client/status/':'user-lawyer/status/'); ?>" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>" value="<?php echo e($m->status); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak Aktif'); ?></a>
                <a href="#" name="user-verified/" style="color:white" class="activation badge bg-<?php echo e(($m->verified == true)?'danger':'success'); ?>" id="<?php echo e($m->id); ?>" value="<?php echo e($m->verified); ?>"><?php echo e(($m->verified == true)?'Unverified':'Verified'); ?></a>
                <a href="<?php echo e(request()->is('user-client*')?url('user-client'):(request()->is('user-lawyer*')?url('user-lawyer'):url('user-notaris'))); ?>/<?php echo e($m->id); ?>" name="user" style="color:white" class="badge bg-success">Detail</a>
                <a href="#" name="<?php echo e(request()->is('user-client*')?'user-client':(request()->is('user-lawyer*')?'user-lawyer':'user-notaris')); ?>" style="color:white" class="badge bg-info editUser" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalUserEdit">Edit</a>
                <?php if(request()->is('user-lawyer*')): ?>
                <a href="<?php echo e(url('user-lawyer/service/'.$m->id)); ?>" style="color:white" class="badge bg-info">Edit Service</a>
                <?php endif; ?>
                <?php if(request()->is('user-notaris*')): ?>
                <a href="<?php echo e(url('user-notaris/service/'.$m->id)); ?>" style="color:white" class="badge bg-info">Edit Service</a>
                <a href="<?php echo e(url('user-notaris/filled/'.$m->id)); ?>" style="color:white" class="badge bg-<?php echo e(($m->verified == false)?'danger':'info'); ?>">Lengkapi Data</a>
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($user->links()); ?>

    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<!-- Modal User Edit-->
<div class="modal fade" id="modalUserEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(url('user')); ?>" method="post" enctype="multipart/form-data" class='form-user'>
          <?php echo method_field('put'); ?>
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control form-control-user" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
              <label>Telpon</label>
              <input type="text" class="form-control form-control-user" name="telp" id="telp" placeholder="Telp" required>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control form-control-user" name="alamat" id="alamat" placeholder="Alamat" required>
          </div>
          <?php if(request()->is('user-lawyer*')): ?>
          <div class="form-group">
              <label>Gelar</label>
              <input type="text" class="form-control form-control-user" name="gelar" id="gelar" placeholder="Gelar" required>
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
          <?php if(request()->is('user-notaris*')): ?>
          <div class="form-group">
              <label>PILIH LAYANAN</label><br>
              <?php $__currentLoopData = $legalitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input type="checkbox" name="service[]" value="<?php echo e($m->id); ?>" class="service" id="service<?php echo e($m->id); ?>">
              <label><?php echo e($m->nama); ?></label><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
          <div class="form-group" id="avatar">
              <label>Avatar</label><br>
              <img src="" width="200px" alt="" class="img-thumbnail image"><br>
              <small style="color:red">*max upload 2MB</small><br>
              <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
              <input type="file" class="form-control form-control-user" name="image" id="image">
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
<!-- User Modal -->
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo e(url('user-notaris')); ?>" method="post" enctype="multipart/form-data" class='form-user'>
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
              <label>Telpon</label>
              <input type="text" class="form-control" name="telp" placeholder="Telp" required>
          </div>
          <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
          </div>
          <?php if(request()->is('user-notaris*')): ?>
          <div class="form-group">
              <label>PILIH LAYANAN</label><br>
              <?php $__currentLoopData = $legalitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input type="checkbox" name="service[]" value="<?php echo e($m->id); ?>">
              <label><?php echo e($m->nama); ?></label><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
          <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih</option>
                <option value="LK">Laki-laki</option>
                <option value="PR">Perempuan</option>
              </select>
          </div>
          <div class="form-group">
              <label>Avatar</label><br>
              <small style="color:red">*max upload 2MB</small><br>
              <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
              <input type="file" class="form-control form-control-user" name="image">
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
  // $('.editUser').on('click', function(){
    $('table tbody').on( 'click', '.editUser', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    var url = "<?php echo e(url('user-lawyer')); ?>/"+id+"/edit";
    if(method == 'user-lawyer'){
    var url_form = "<?php echo e(url('user-lawyer')); ?>/"+id+"";
    }else if(method == 'user-client'){
    var url_form = "<?php echo e(url('user-client')); ?>/"+id+"";
    }else if(method == 'user-notaris'){
    var url_form = "<?php echo e(url('user-notaris')); ?>/"+id+"";
    }
    $.ajax({
            type:"get",
            url: url,
            success:function(data){
              $('.form-user').attr( 'action', url_form)
              if(data.jenis_kelamin == 'PR'){
                $('.form-user #jenis_kelamin_pr').attr('selected', true)
              }
              else{
                $('.form-user #jenis_kelamin_lk').attr('selected', true)
              }
              $('.form-user #email').val(data.email)
              $('.form-user #telp').val(data.telp)
              $('.form-user #nama_lengkap').val(data.nama_lengkap)
              if(data.role == 'LAWYER'){
                $('.form-user #gelar').val(data.lawyer_detail.gelar)
              }
              if(data.avatar == null){
                $(".form-user .image").attr('src', "<?php echo e(url('public/avatar-default1.png')); ?>" )
              }else{
                $(".form-user .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.avatar )
              }
              $('.form-user #alamat').val(data.alamat)
              var service = JSON.parse(data.lawyer_detail.service)
              $('.form-user .service').prop('checked', false)
              $.each(service, function( index, value ) {
                $('.form-user #service'+value).prop('checked', true)
              });
              $('.form-user #jenis_kelamin').val(data.jenis_kelamin)
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/user/index.blade.php ENDPATH**/ ?>