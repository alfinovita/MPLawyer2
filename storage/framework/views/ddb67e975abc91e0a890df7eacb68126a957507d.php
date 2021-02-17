

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <?php $__currentLoopData = $legalitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row justify-content-center my-4">
            <div class="col-md-10 text-center ftco-animate">
               
                    
                
            <h2 class="pb-3 font-weight-bold"><?php echo e($l->nama); ?></h2>
            </div>
           
        </div>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(asset($l->image)); ?>" alt="" class="rounded d-block mx-auto" style="width: 15rem;height: 15rem; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold" style="text-align: center;">Selamat Datang </h5>
                        <h5 class="font-weight-bold" style="text-align: center;">di <?php echo e($l->nama); ?></h5>
                        <small class="text-muted d-flex justify-content-center">Fitur ini Hanya tersedia dengan akun tipe Notaris</small>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/kategori/legalitas/index.blade.php ENDPATH**/ ?>