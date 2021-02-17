

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center my-4">
                <div class="col-md-10 text-center ftco-animate">
                    <h2 class="pb-3 font-weight-bold">Pertanyaan</h2>
                </div>
            </div>
          
            <?php if($pertanyaan->isEmpty()): ?>
            <div class="row justify-content-center  ftco-animate">
                <div class="col-sm m-5 ">
                    <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_pertanyaan_kosong.png"
                        alt="" class="d-block mx-auto" style="width: 30%; ">
                    <div class="row justify-content-center">
                        <div class="col-sm-5 my-3">
                            <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada</h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <?php $__currentLoopData = $pertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row justify-content-center pb-3 ftco-animate">
                <div class="col-md-12 col-lg-12">
                    <a href="<?php echo e(url('advokat/pertanyaan/'.$p->id)); ?>">
                        <div class="card mx-auto  p-3 mb-5 bg-white" style="max-width: auto;">
                            <div class="row ">
                                <div class="row  card-body py-0">
                                    <div class="col mx-auto my-auto pr-0">
                                        <div class="row justify-content-center">
                                            <?php if($p->user->avatar == ''): ?>
                                            <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid" style="height: 5rem; width: 5rem;" > 
                                            <?php else: ?>
                                            <img src="<?php echo e(asset($p->user->avatar)); ?>" class="rounded-circle img-fluid" style="height: 5rem; width: 5rem;" alt="...">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 pl-0">
                                        <div class="card-body pb-0 mx-2">
                                            <h5 class="card-title mb-0 font-weight-bold"><?php echo e($p->user->nama_lengkap); ?></h5>
                                            <p class="text-muted"><?php echo e(date(' d M Y  H:i', strtotime($p->created_at))); ?> WIB</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 my-auto ">
                                        <h2 class="text-danger d-flex justify-content-end ">Rp. <?php echo number_format($p->budget, 0, ',', '.'); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters ">
                                <div class="col-sm-12 pt-2">
                                <p class="m-0 text-dark pl-2">Kategori : <?php echo e($p->kategori_layanan); ?></p>
                                </div>
                                <div class="col bg-light m-2">
                                    <p class="text-dark p-3 m-0">
                                      <?php echo e($p->judul_pertanyaan); ?>

                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/pertanyaan/index.blade.php ENDPATH**/ ?>