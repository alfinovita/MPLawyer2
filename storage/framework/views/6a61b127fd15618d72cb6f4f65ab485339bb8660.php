

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-3 font-weight-bold">Bantuan</h2>
            </div>
        </div>
        <div class="row d-md-flex  mt-5 d-flex ftco-animate">
            <?php $__currentLoopData = $help; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12 pb-3">
                <a href="<?php echo e(url('advokat/help/'.$h->id)); ?>">
                    <div class="alert alert-danger rounded" role="alert">
                        <div class="row no-gutters text-dark">
                        
                            <div class="col-2 d-flex justify-content-center my-auto">
                                <?php if($h->id==2): ?>
                                <i class="far fa-envelope" style="font-size: 40px"></i>
                                <?php elseif($h->id==1): ?>
                                <i class="fas fa-phone-alt"style="font-size: 40px"></i>
                                <?php elseif($h->id==3): ?>
                                <i class="fab fa-whatsapp"style="font-size: 40px"></i>
                                <?php endif; ?>
                             
                            </div>
                            <div class="col my-auto d-flex align-items-center ">
                                <h2 class="text-weight-bold py-auto"><?php echo e($h->name_contact); ?></h2>
                            </div>
                            <div class="col-2  d-flex justify-content-center my-auto">
                                <i class="fas fa-angle-right" style="font-size: 40px"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/bantuan/index.blade.php ENDPATH**/ ?>