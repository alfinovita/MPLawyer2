

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section>
    <img src="<?php echo e(asset($slider_lawyer->image)); ?>" class="slider-detail" alt="">
</section>


<section class="ftco-section  pt-3 bg-light">
    <div class="container  ">
        <div class="row justify-content-center my-5">
            <div class="col-md-10 text-center ftco-animate">
            <h2 class="pb-4 font-weight-bold"><?php echo e($slider_lawyer->judul); ?></h2>
            </div>
        </div>
        <p>
           <?php echo e($slider_lawyer->deskripsi); ?> 
        </p>

    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/slider/lawyer.blade.php ENDPATH**/ ?>