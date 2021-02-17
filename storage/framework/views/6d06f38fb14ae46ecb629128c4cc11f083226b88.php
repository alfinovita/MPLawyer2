

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-4 font-weight-bold">Pendampingan</h2>
            </div>
        </div>
        <?php if($pendampingan->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_belum_ada_pendampingan.png"
                    alt="" class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $pendampingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(url('advokat/pendampingan/'.$p->id)); ?>">
            <div class="card mx-auto  p-3 mt-4 mb-5 bg-white " style="max-width: auto;">
                <div class="row no-gutters">
                    <div class="row card-body py-0">
                        <div class="col-lg col-md col-sm ">
                            <div class="row justify-content-center">
                                <?php if($p->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid"
                                    style="height: 5rem; width: 5rem;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($p->client->avatar)); ?>" class="rounded-circle img-fluid"
                                    style="height: 5rem; width: 5rem;" alt="...">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6 pl-0">
                            <div class="card-body pb-0">
                                <h5 class="card-title mb-0 font-weight-bold"><?php echo e($p->client->nama_lengkap); ?></h5>
                                <p class="text-info">
                                    <?php if($p->status== 'WAITING'): ?>
                                    Menunggu Advokat
                                    <?php elseif($p->status =='CONFRIM'): ?>
                                    Disetujui Advokat
                                    <?php elseif($p->status =='TOLAK'): ?>
                                    Ditolak Advokat 
                                    <?php elseif($p->status =='PAID'): ?>
                                    Sudah Dibayar
                                    <?php elseif($p->status ==  'WAITING_PAYMENT'): ?>
                                      Menunggu Pembayaran
                                    <?php else: ?>
                                    <?php echo e($p->status); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4  my-auto ">
                            <small
                                class="text-muted d-flex justify-content-end "><?php echo e(date('d F Y ', strtotime($p->created_at))); ?></small>
                        </div>
                        <div class="row card-body pb-0">
                            <p class="m-0 text-dark pl-2">Pendampingan <?php echo e($p->konsultasi->service->nama); ?></p>
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
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/aktivitas/pendampingan/index.blade.php ENDPATH**/ ?>