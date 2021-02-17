
<?php $__env->startSection('title'); ?>
Pengajuan Member
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Pengajuan Member</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Pengajuan Member</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalPengajuanMember">
        Tambah Pengajuan Member
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Transaksi ID</th>
            <th>Status</th>
            <th>Member Expired</th>
            <th>Lawyer ID</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $pengajuanMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->transaksi_id); ?></td>
            <td>
              <?php if($m->status == true): ?>
              AKTIF
              <?php else: ?>
              TIDAK AKTIF
              <?php endif; ?>
            </td>
            <td><?php echo e($m->member_expired); ?></td>
            <td><?php echo e($m->lawyer_id); ?></td>
            <td>
                <a href="#" name="<?php echo e(request()->is('pendampingan-client*')?'pendampingan-client/status/':'pendampingan-lawyer/status/'); ?>" style="color:white" class="activation badge bg-<?php echo e(($m->status == true)?'success':'danger'); ?>" id="<?php echo e($m->id); ?>"><?php echo e(($m->status == true)?'Aktif':'Tidak A ktif'); ?></a>
                <a href="#" name="pengajuanMember" style="color:white" class="badge bg-info editPengajuanMember" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalPengajuanMemberEdit">Edit</a>
                <a href="#" name="pengajuanMember" class="delete badge btn btn-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
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

<!-- Modal Pengajuan Member-->
<div class="modal fade" id="modalPengajuanMember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Member</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('pengajuanMember')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Transaksi ID</label>
            <input type="nama" class="form-control form-control-pengajuanMember" name="transaksi_id" id="transaksi_id" placeholder="Transaksi ID" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-pengajuanMember" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Member Expired</label>
            <input type="date" class="form-control form-control-pengajuanMember" name="member_expired" id="member_expired" placeholder="Member Expired" required>
        </div>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-pengajuanMember" name="lawyer_id" id="lawyer_id" placeholder="Lawyer Id" required>
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

<!-- Modal PengajuanMember Edit-->
<div class="modal fade" id="modalPengajuanMemberEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan Member</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('pengajuanMember')); ?>" method="post" enctype="multipart/form-data" class='form-pengajuanMember'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Transaksi ID</label>
            <input type="nama" class="form-control form-control-pengajuanMember" name="transaksi_id" id="transaksi_id" placeholder="Transaksi ID" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control form-control-pengajuanMember" name="status" id="status" placeholder="Status" required>
        </div>
        <div class="form-group">
            <label>Member Expired</label>
            <input type="date" class="form-control form-control-pengajuanMember" name="member_expired" id="member_expired" placeholder="Member Expired" required>
        </div>
        <div class="form-group">
            <label>Lawyer ID</label>
            <input type="nama" class="form-control form-control-pengajuanMember" name="lawyer_id" id="lawyer_id" placeholder="Lawyer Id" required>
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
  // $('.editPengajuanMember').on('click', function(){
    $('table tbody').on( 'click', '.editPengajuanMember', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('pengajuanMember')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/pengajuanMember/" + id + "/edit",
            success:function(data){
              $('.form-pengajuanMember').attr( 'action', url)
              $('.form-pengajuanMember #transaksi_id').val(data.transaksi_id)
              $('.form-pengajuanMember #type').val(data.type)
              $('.form-pengajuanMember #lawyer_id').val(data.lawyer_id)
              $('.form-pengajuanMember #member_expired').val(data.member_expired)
              $('.form-pengajuanMember #status').val(data.status);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/pengajuanmember/index.blade.php ENDPATH**/ ?>