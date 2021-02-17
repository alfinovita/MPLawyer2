
<?php $__env->startSection('title'); ?>
Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Admin</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Admin</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalAdmin">
        Tambah Admin
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Avatar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
            <td><?php echo e($no); ?></td>
            <td><?php echo e($m->username); ?></td>
            <td><?php echo e($m->email); ?></td>
            <td><?php echo e($m->telp); ?></td>
            <td><img src="<?php echo e(asset($m->avatar)); ?>" alt="Avatar" width="200px" class="img-thumbnail myImg"></td>
            <td>
                <a href="#" name="admin" style="color:white" class="badge bg-info editAdmin" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalAdminEdit">Edit</a>
                <a href="#" class="changePassword badge bg-success" style="color:white" data-toggle="modal" data-target="#modalChangePassword" data-id="<?php echo e($m->id); ?>" >Ganti Password</a>
                <a href="#" name="admin" class="delete badge bg-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
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
<!-- Modal Admin-->
<div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('admin')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username"  placeholder="Username" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email"  placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <label>Telpon</label>
            <input type="number" class="form-control" name="telp"  placeholder="Telp" required>
        </div>
        <div class="form-group" >
            <label>Password</label><br>
            <small style="color:red">*min 6 Karakter</small>
            <input type="password" class="form-control" name="password"  placeholder="Password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation"  placeholder="" required>
        </div>
        <div class="form-group" id="avatar">
            <label>Avatar</label><br>
            <small style="color:red">*max upload 2MB</small>
            <input type="file" class="form-control" name="avatar">
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

<!-- Modal Admin Edit-->
<div class="modal fade form-admin" id="modalAdminEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('admin')); ?>" method="post" enctype="multipart/form-data" class='form-admin'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control form-control-admin" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control form-control-admin" name="email" id="email" placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <label>Telpon</label>
            <input type="number" class="form-control form-control-admin" name="telp" id="telp" placeholder="Telp" required>
        </div>
        <div class="form-group" id="avatar">
            <label>Avatar</label><br>
            <img src="" width="200px" alt="" class="img-thumbnail image"><br>
            <small style="color:red">*max upload 2MB</small><br>
            <small style="color:red">*Kosongi Jika tidak ingin diubah</small>
            <input type="file" class="form-control form-control-admin" name="avatar" id="image">
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
  // $('.editAdmin').on('click', function(){
    $('table tbody').on( 'click', '.editAdmin',function (e) {
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    // console.log(data);
    var url = "<?php echo e(url('admin')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/admin/"+id+"/edit",
            success:function(data){
              $('.form-admin').attr('action', url)
              $('.form-admin #username').val(data.username)
              $('.form-admin #email').val(data.email)
              $('.form-admin #telp').val(data.telp)
              $(".form-admin .image").attr('src', "<?php echo e(asset('/')); ?>"+ data.avatar)
            },
            error : function(data){
              console.log(data.responseText)
            }
          });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/admin/index.blade.php ENDPATH**/ ?>