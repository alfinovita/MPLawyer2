
<?php $__env->startSection('title'); ?>
Peraturan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
.avatar { 
  background: url(blah.jpg) 50% 50% no-repeat; /* 50% 50% centers image in div */
  width: 40px;
  height: 40px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Peraturan <?php echo e($peraturan->nama_peraturan); ?></h1><br>
    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalPeraturan">
        Tambah <?php echo e($peraturan->nama_peraturan); ?> 
    </a>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php $__currentLoopData = $peraturan->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="accordion" id="accordionExample">
            <div class="card">
                
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne<?php echo e($m->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($m->id); ?>">
                    <h4 class="mb-0">
                        <a href="#" class="btn btn-info editPeraturan" style="float:right;display:inline;color:white;" data-toggle="modal" data-target="#modalPeraturanEdit" id="<?php echo e($m->id); ?>">Edit</a>
                        <button class="btn m-0 font-weight-bold text-primary text" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo e($m->id); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo e($m->id); ?>">
                        <?php echo e($m['nomer']); ?>

                        <h6 class="text-black-50 text"><?php echo e($m['judul']); ?></h6>
                        </button>
                    </h4>
                </div>
                <div id="collapseOne<?php echo e($m->id); ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="300">Nama Peraturan</td>
                        <td width="50">:</td>
                        <td ><?php echo e($peraturan->nama_peraturan); ?></td>
                    </tr>
                    <tr>
                        <td width="300">Status</td>
                        <td width="50">:</td>
                        <td ><?php if($peraturan->status == true): ?>
                            Aktif
                            <?php else: ?>
                            Tidak Aktif
                            <?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['nomer']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['judul']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['jenis']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['instansi']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Ditetapkan</td>
                        <td>:</td>
                        <td>
                        <?php echo e(date('d-m-Y', strtotime($m['tgl_ditetapkan']))); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>No BN</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['no_bn']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>No TBN</td>
                        <td>:</td>
                        <td>
                        <?php echo e($m['no_tbn']); ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Diundingkan</td>
                        <td>:</td>
                        <td>
                        <?php echo e(date('d-m-Y', strtotime($m['tgl_diundingkan']))); ?>

                        </td>
                    </tr>
                    <?php if($m['file']): ?>
                    <tr>
                        <td>File</td>
                        <td>:</td>
                        <td>
                        <?php $file = json_decode($m['file']);
                        ?>
                        <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(asset($s)); ?>" target="_blank"><i class="fa fa-download fa-5x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                        <a href="#" name="peraturan-deleteFile" params="<?php echo e($k); ?>" id="<?php echo e($m['id']); ?>" style="color:red;" class="deleteFile"><i class="fa fa-times-circle fa-lg"></i></a>&nbsp;&nbsp;
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <a href="#" class="badge bg-info PeraturanAddFile" style="color:white;" data-toggle="modal" id="<?php echo e($m->id); ?>" data-target="#modalPeraturanAddFile" name="peraturan-addfile"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <td>File</td>
                        <td>:</td>
                        <td>
                        <a href="#" class="badge bg-info PeraturanAddFile" style="color:white;" data-toggle="modal" id="<?php echo e($m->id); ?>" data-target="#modalPeraturanAddFile" name="peraturan-addfile"><i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <!-- Modal Peraturan-->
    <div class="modal fade" id="modalPeraturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Peraturan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(url('peraturanDetail')); ?>" method="post" class='form'>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Nomor</label>
                <input type="text" class="form-control" name="nomer" placeholder="Nomor" required>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <input type="text" class="form-control" name="jenis" placeholder="Jenis" required>
            </div>
            <div class="form-group">
                <label>Instansi</label>
                <input type="text" class="form-control" name="instansi" placeholder="Nomor" required>
            </div>
            <div class="form-group">
                <label>Tanggal Ditetapkan</label>
                <input type="date" class="form-control" name="tgl_ditetapkan" placeholder="Tanggal Ditetapkan" required>
            </div>
            <div class="form-group">
                <label>No BN</label>
                <input type="text" class="form-control" name="no_bn" placeholder="No BN" required>
            </div>
            <div class="form-group">
                <label>No TBN</label>
                <input type="text" class="form-control" name="no_tbn" placeholder="No TBN" required>
            </div>
            <div class="form-group">
                <label>Tanggal Dirundingkan</label>
                <input type="date" class="form-control" name="tgl_diundingkan" placeholder="Tanggal Dirundingkan" required>
            </div>
            <input type="hidden" class="form-control" name="peraturan_id" value="<?php echo e($peraturan->id); ?>">
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

    <!-- Modal Peraturan Add File-->
    <div class="modal fade" id="modalPeraturanAddFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah File Peraturan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(url('peraturan-addfile')); ?>" method="post" enctype="multipart/form-data" class='form-addfile'>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control" name="file" required>
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

    <div class="modal fade" id="modalPeraturanEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Peraturan</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(url('peraturan')); ?>" method="post" class='form-peraturan'>
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Nomor</label>
                <input type="text" class="form-control" name="nomer" id="nomer" placeholder="Nomor" required>
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" required>
            </div>
            <div class="form-group">
                <label>Instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Nomor" required>
            </div>
            <div class="form-group">
                <label>Tanggal Ditetapkan</label>
                <input type="date" class="form-control" name="tgl_ditetapkan" id="tgl_ditetapkan" placeholder="Tanggal Ditetapkan" required>
            </div>
            <div class="form-group">
                <label>No BN</label>
                <input type="text" class="form-control" name="no_bn" id="no_bn" placeholder="No BN" required>
            </div>
            <div class="form-group">
                <label>No TBN</label>
                <input type="text" class="form-control" name="no_tbn" id="no_tbn" placeholder="No TBN" required>
            </div>
            <div class="form-group">
                <label>Tanggal Dirundingkan</label>
                <input type="date" class="form-control" name="tgl_diundingkan" id="tgl_diundingkan" placeholder="Tanggal Dirundingkan" required>
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
    $('.editPeraturan').on('click', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    console.log(method);
    var url = "<?php echo e(url('peraturanDetail')); ?>/"+id;
    $.ajax({
        type:"get",
        url:"<?php echo e(url('peraturanDetail')); ?>/"+ id + "/edit",
        success:function(data){
            $('.form-peraturan').attr('action', url)
            $('.form-peraturan #nomer').val(data.nomer);
            $('.form-peraturan #judul').val(data.judul);
            $('.form-peraturan #jenis').val(data.jenis);
            $('.form-peraturan #instansi').val(data.instansi);
            $('.form-peraturan #tgl_ditetapkan').val(data.tgl_ditetapkan);
            $('.form-peraturan #no_bn').val(data.no_bn);
            $('.form-peraturan #no_tbn').val(data.no_tbn);
            $('.form-peraturan #tgl_diundingkan').val(data.tgl_diundingkan);
        },
        error : function(data){
            console.log(data.responseText)
            alert('Sorry, Something error :(')
        }
        })
  })
</script>

<script>
    $('.PeraturanAddFile').on('click', function (e){
    var id = $(this).attr('id');
    var method = $(this).attr('name');
    var url = "<?php echo e(url('')); ?>/"+method+'/'+id;
    $('.form-addfile').attr('action', url)
  })
</script>

<script>
    $('.deleteFile').on( 'click',function (e) {
        //menghentikan link/event agar tidak jalan
        var id = $(this).attr('id')
        var method = $(this).attr('name')
        var params = $(this).attr('params');
        console.log(method);
        e.preventDefault();
        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus Data!',
        focusCancel: true,
        
        }).then((confirm,value)=>{
        if(confirm.value === true){
            $.ajax({
            type:"post",
            url:"<?php echo e(url('')); ?>/"+ method+'/'+params + '/' + id,
            data:{_method:'delete'},
            success:function(data){
                Swal.fire({
                title:"Berhasil",
                text:"Data Berhasil Dihapus",
                type:"success",
                showConfirmButton:false,
                timer: 3000}),
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
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/peraturan/detail.blade.php ENDPATH**/ ?>