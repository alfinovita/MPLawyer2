
<?php $__env->startSection('title'); ?>
Chat
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Chat</h1>
<p class="mb-4">
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Daftar Chat</h6>
    <a href="#" class="btn btn-danger" style="float:right;display:inline"  data-toggle="modal" data-target="#modalChat">
        Tambah Chat
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Konsultasi</th>
            <th>Pengirim</th>
            <th>Penerima</th>
            <th>Message</th>
            <th>Type</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Konsultasi</th>
            <th>Pengirim</th>
            <th>Penerima</th>
            <th>Message</th>
            <th>Type</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $no = 0;?>
          <?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $no++ ;?>
          <tr>
          <td><?php echo e($no); ?></td>
            <td><?php echo e($m->konsultasi_id); ?></td>
            <td><?php echo e($m->pengirim_id); ?></td>
            <td><?php echo e($m->penerima_id); ?></td>
            <td><?php echo e($m->message); ?></td>
            <td><?php echo e($m->type); ?></td>
            <td>
                <a href="#" name="chat" style="color:white" class="badge bg-info editChat" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalChatEdit">Edit</a>
                <a href="#" name="chat" class="delete badge bg-danger" style="color:white" id="<?php echo e($m->id); ?>" >Hapus</a>
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
<!-- Modal Komentars-->
<div class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Komentars</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('chat')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Konsultasi ID</label>
            <input type="text" class="form-control form-control-chat" name="konsultasi_id" placeholder="Konsultasi ID" required>
        </div>
        <div class="form-group">
            <label>Pengirim ID</label>
            <input type="text" class="form-control form-control-chat" name="pengirim_id" placeholder="Pengirim ID" required>
        </div>
        <div class="form-group">
            <label>Penerima ID</label>
            <input type="text" class="form-control form-control-chat" name="penerima_id" placeholder="Penerima ID" required>
        </div>
        <div class="form-group">
            <label>Message</label>
            <input type="text" class="form-control form-control-chat" name="message" placeholder="Message" required>
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control form-control-chat" name="type" placeholder="Type" required>
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

<!-- Modal Komentars Edit-->
<div class="modal fade" id="modalChatEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Komentars</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('chat')); ?>" method="post" enctype="multipart/form-data" class='form-chat'>
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Konsultasi ID</label>
            <input type="text" class="form-control form-control-chat" name="konsultasi_id" id="konsultasi_id" placeholder="Konsultasi ID" required>
        </div>
        <div class="form-group">
            <label>Pengirim ID</label>
            <input type="text" class="form-control form-control-chat" name="pengirim_id" id="pengirim_id" placeholder="Pengirim ID" required>
        </div>
        <div class="form-group">
            <label>Penerima ID</label>
            <input type="text" class="form-control form-control-chat" name="penerima_id" id="penerima_id" placeholder="Penerima ID" required>
        </div>
        <div class="form-group">
            <label>Message</label>
            <input type="text" class="form-control form-control-chat" name="message" id="message" placeholder="Message" required>
        </div>
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control form-control-chat" name="type" id="type" placeholder="Type" required>
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
<script type="text/javascript" >
  // $('.editKomentars').on('click', function(){
    $('table tbody').on( 'click', '.editChat', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    //console.log(data);
    var url = "<?php echo e(url('chat')); ?>/"+id;
    $.ajax({
            type:"get",
            url:"http://idaman.org/lawyer/chat/" + id + "/edit",
            success:function(data){
              $('.form-chat').attr( 'action', url)
              $('.form-chat #konsultasi_id').val(data.konsultasi_id)
              $('.form-chat #pengirim_id').val(data.pengirim_id)
              $('.form-chat #penerima_id').val(data.penerima_id)
              $('.form-chat #message').val(data.message)
              $('.form-chat #type').val(data.type);
            },
            error : function(data){
              console.log(data.responseText)
              alert('Sorry, Something error :(')
            }
          })
  })
</script>

<script>
    $('table tbody').on( 'click', '.statusaktif',function (e) {
      //menghentikan link/event agar tidak jalan
        var id = $(this).attr('id')
        var method = $(this).attr('name')
        console.log(method);
        e.preventDefault();
        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Status akan di Non-Aktifkan?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Non-Aktifkan!',
        focusCancel: true,
        }).then((confirm,value)=>{
        if(confirm.value === true){
          $.ajax({
            type:"post",
            url:"http://idaman.org/lawyer/user/" + id,
            data:{_method:'GET'},
            success:function(data){
        console.log(data)
              Swal.fire({
                title:"Berhasil",
                text:"Status Berhasil Di ubah",
                type:"success",
                showConfirmButton:false,
                timer: 5000}),
                location.reload()
            },
            error : function(data){
              console.log(data)
              alert('Sorry, Something error :(')
            }
          })
        }
      })
    });
  </script>
  
  <script>
    $('table tbody').on( 'click', '.statusnon',function (e) {
      //menghentikan link/event agar tidak jalan
        var id = $(this).attr('id')
        var method = $(this).attr('name')
        console.log(method);
        e.preventDefault();
        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Status akan di Aktifkan?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Aktifkan!',
        focusCancel: true,
        }).then((confirm,value)=>{
        if(confirm.value === true){
          $.ajax({
            type:"post",
            url:"http://idaman.org/lawyer/user/" + id,
            data:{_method:'GET'},
            success:function(data){
        console.log(data)
              Swal.fire({
                title:"Berhasil",
                text:"Status Berhasil Di ubah",
                type:"success",
                showConfirmButton:false,
                timer: 5000}),
                location.reload()
            },
            error : function(data){
              console.log(data)
              alert('Sorry, Something error :(')
            }
          })
        }
      })
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/chat/index.blade.php ENDPATH**/ ?>