
<?php $__env->startSection('title'); ?>
<?php echo e(request()->is('konsultasi-ongoing*')?'Konsultasi Berlangsung':(request()->is('konsultasi-finish*')?'Konsultasi Selesai':'History Konsultasi')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>
    .me{
    font-size: 12px;
    margin: -4px ;
    border-right: 3px solid #60DF88 !important;
    padding: 5px;
}
.panel-body
{
    overflow-y: scroll;
    height: 500px;
}
.you{
    font-size: 12px;
    margin: -4px ;
    border-left: 3px solid rgb(255, 112, 0) !important;
    padding: 5px;
    padding-left:10px;
}

</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail <?php echo e(request()->is('konsultasi-ongoing*')?'Konsultasi Berlangsung':(request()->is('konsultasi-finish*')?'Konsultasi Selesai':'History Konsultasi')); ?></h1>
    <p class="mb-4">
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="float:left;display:inline">Detail <?php echo e(request()->is('konsultasi-ongoing*')?'Konsultasi Berlangsung':(request()->is('konsultasi-finish*')?'Konsultasi Selesai':'History Konsultasi')); ?></h6>
    </div>
    
        <div class="card body">
            <table class="table">
                <tr>
                    <td>Nama Lawyer</td>
                    <td>:</td>
                    <td><?php echo e($konsultasi->lawyer->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Nama Client</td>
                    <td>:</td>
                    <td><?php echo e($konsultasi->client->nama_lengkap); ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo e($konsultasi->status); ?></td>
                </tr>
                <tr>
                    <td>Service</td>
                    <td>:</td>
                <?php if($konsultasi->service_id == 0): ?>
                    <td>Probono</td>
                <?php else: ?>
                    <td><?php echo e($konsultasi->service->nama); ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td>Tanggal Konsultasi</td>
                    <td>:</td>
                    <td><?php echo e($konsultasi->created_at); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>        
                        <!-- /.history chat -->
                        <div class="card">
                            <div class="panel panel-default">
                            <div class="panel-heading bg-gradient-primary" style="color:white;"><b> Chat </b> </div>
                            <div class="panel-body">
                                <?php $__currentLoopData = $konsultasi->chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($konsultasi->client_id == $m->penerima_id): ?>
                                        <?php if($m->type == 'IMAGE'): ?>
                                        <div class="clearfix"><blockquote class="you pull-left"><img src="<?php echo e(asset($m->message)); ?>" alt="Gambar" width="200px" class="img-thumbnail myImg"></blockquote></div>
                                        <?php elseif($m->type == 'FILE'): ?>
                                        <div class="clearfix">
                                            <blockquote class="you pull-left">
                                                <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                    <a href="<?php echo e(asset($m->message)); ?>">
                                                    <i class="fas fa-fw fa-paperclip"></i>
                                                        Download File
                                                    </a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php elseif($m->type == 'TAGIHAN'): ?>
                                        <div class="clearfix">
                                            <blockquote class="you pull-left">
                                                <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-left"><?php echo e($konsultasi->lawyer->nama_lengkap); ?></h5>
                                                        <label><small><?php echo e($m->created_at); ?></small></label>
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        Tagihan Di Ajukan
                                                        </p>
                                                        <a href="#" class="badge bg-danger showDetail" style="color: white;" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php else: ?>
                                        <div class="clearfix">
                                            <blockquote class="you pull-left">
                                                <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        <?php echo e($m->message); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if($m->type == 'IMAGE'): ?>
                                            <div class="clearfix"><blockquote class="me pull-right"><img src="<?php echo e(asset($m->message)); ?>" alt="Gambar" width="200px" class="img-thumbnail myImg"></blockquote></div>
                                        <?php elseif($m->type == 'FILE'): ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right">
                                                <div class="card" style="margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                    <a href="<?php echo e(asset($m->message)); ?>">
                                                    <i class="fas fa-fw fa-paperclip"></i>
                                                        Download File
                                                    </a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php elseif($m->type == 'VICON'): ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right"> 
                                                <div class="card" style="margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-left"><?php echo e($konsultasi->lawyer->nama_lengkap); ?></h5>
                                                        <label><small><?php echo e($m->created_at); ?></small></label>
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        Ajukan Video Conference
                                                        </p>
                                                        <a href="#" class="badge bg-danger showDetail" style="color: white;" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php elseif($m->type == 'TERTULIS'): ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right">
                                                <div class="card" style="margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-left"><?php echo e($konsultasi->lawyer->nama_lengkap); ?></h5>
                                                        <label><small><?php echo e($m->created_at); ?></small></label>
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        Ajukan Layanan Tertulis Legal Opinion
                                                        </p>
                                                        <a href="#" class="badge bg-danger showDetail" style="color: white;" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php elseif($m->type == 'PENDAMPINGAN'): ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right">
                                                <div class="card" style="margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-left"><?php echo e($konsultasi->lawyer->nama_lengkap); ?></h5>
                                                        <label><small><?php echo e($m->created_at); ?></small></label>
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        Ajukan Pendampingan Mediasi
                                                        </p>
                                                        <a href="#" class="badge bg-danger showDetail" style="color: white;" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php elseif($m->type == 'PERTEMUAN'): ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right">
                                                <div class="card" style="margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-left"><?php echo e($konsultasi->lawyer->nama_lengkap); ?></h5>
                                                        <label><small><?php echo e($m->created_at); ?></small></label>
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        Ajukan Pertemuan
                                                        </p>
                                                        <a href="#" class="badge bg-danger showDetail" style="color: white;" id="<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modalDetail">Detail</a>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php else: ?>
                                        <div class="clearfix">
                                            <blockquote class="me pull-right"> 
                                                <div class="card" style="margin-left: 10px; margin-top: 5px; margin-bottom: 5px;">
                                                    <div class="card-body">
                                                        <p class="card-text text-left" style="margin-top: 8px;">
                                                        <?php echo e($m->message); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            </div>
                        </div>
                        <!-- /.end history chat -->
                    </td>
                </tr>
            </table>    
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>

<div class="modal" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Konsultasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(url('konsultasi')); ?>" method="post" enctype="multipart/form-data" class='form'>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control form-control-konsultasi" name="lawyer_id" id="lawyer_id" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control form-control-konsultasi" name="created_at" id="created_at" placeholder="Tanggal" required>
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
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/konsultasi/show.blade.php ENDPATH**/ ?>