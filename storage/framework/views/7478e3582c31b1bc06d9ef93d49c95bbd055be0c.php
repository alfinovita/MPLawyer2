

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- content -->
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-10  text-center ftco-animate">
                <h2 class="pb-4 font-weight-bold">Video Conference</h2>
            </div>
        </div>
        <?php if($vicon->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_live_chat.png" alt=""
                    class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $vicon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url('advokat/video-conference/'.$v->id)); ?>">
            <div class="card mx-auto  p-3 mt-4 mb-5 " style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="row card-body py-0">
                        <div class="col-lg col-md col-sm">
                            <div class="row justify-content-center">
                                <?php if($v->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid"
                                    style="height: 5rem; width: 5rem;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($v->client->avatar)); ?>" class="rounded-circle img-fluid"
                                    style="height: 5rem; width: 5rem;" alt="...">
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6 pl-0">
                            <div class="card-body pb-0">
                                <h5 class="card-title mb-0 font-weight-bold"><?php echo e($v->nama); ?></h5>
                                <p class="text-info">
                                    <?php if($v->status== 'WAITING'): ?>
                                    Menunggu Advokat
                                    <?php elseif($v->status =='CONFRIM'): ?>
                                    Disetujui Advokat
                                    <?php elseif($v->status =='TOLAK'): ?>
                                    Ditolak Advokat Dengan Alasan "<?php echo e($v->alasan_tolak); ?>"
                                    <?php elseif($v->status =='PAID'): ?>
                                    Sudah Dibayar
                                    <?php elseif($v->status ==  'WAITING_PAYMENT'): ?>
                                    Menunggu Pembayaran
                                    <?php else: ?>
                                    <?php echo e($v->status); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 my-auto ">
                            <small
                                class="text-muted d-flex justify-content-end "><?php echo e(date('d F Y ', strtotime($v->created_at))); ?></small>
                        </div>
                        <div class="row card-body pb-0">
                            <p class="m-0 text-dark pl-2">Video conference <?php echo e($v->konsultasi->service->nama); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </a>
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/aktivitas/video-conference/index.blade.php ENDPATH**/ ?>