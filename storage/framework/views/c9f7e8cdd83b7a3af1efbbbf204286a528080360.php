

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-4 font-weight-bold">Report</h2>
            </div>
        </div>
        <?php if($report->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_report_kosong.png"
                    alt="" class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="row ">
            
           
            <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mx-3 mb-3 p-5" style="max-width: auto;">
                <div class="card-body" data-toggle="modal" data-target="#modal-report-<?php echo e($r->id); ?>">
                    <h5 class="card-title font-weight-bold mb-0"><?php echo e($r->judul_report); ?></h5>
                    <p class="text-danger mb-0"><?php echo e(date('d F Y', strtotime($r->created_at))); ?></p>
                    <p class="card-text report">
                        <?php echo e($r->penjelasan); ?>

                    </p>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
<!-- Modal -->
<?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modal-report-<?php echo e($m->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- content -->
                <div class="row no-gutters">
                    <div class="row justify-content-around card-body">
                        <div class="col mx-auto my-auto">
                            <img src="<?php echo e(asset($m->client->avatar)); ?>" class="rounded-circle img-fluid"
                                style="height: 100px; width: 100px;" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold"><?php echo e($m->client->nama_lengkap); ?></h5>
                                <p class="card-text"><small
                                        class="text-muted"><?php echo e(date('d F Y  H:i ', strtotime($m->created_at))); ?>WIB</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title font-weight-bold"><?php echo e($m->judul_report); ?></h5>
                    <p class="card-text"><?php echo e($m->penjelasan); ?></p>
                </div>
                <?php if($m->file==''): ?>
                <?php else: ?>
                <?php
                    $m->file=Json_decode($m->file);
                    $no = 1;
                    ?>
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Lampiran</h5>
                    <?php $__currentLoopData = $m->file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="card-text">
                        <div class="alert alert-danger text-danger" role="alert">
                            <i class="icon-file-text"></i>
                        <a href="<?php echo e(asset($item)); ?> ">
                            <span class="col-4 ml-auto">File report <?php echo e($no++); ?>

                            </span>
                            <i class="fa fa-download " style="float: right;"></i>
                        </a>
                        </div>
                    </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/aktivitas/report/index.blade.php ENDPATH**/ ?>