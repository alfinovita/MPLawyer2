

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
            <div class="col-lg-12 pb-3">
                <a href="<?php echo e(url('client/email')); ?>">
                    <div class="alert alert-danger rounded" role="alert">
                        <div class="row no-gutters text-dark">
                            <div class="col-2 d-flex justify-content-center my-auto">
                                <i class="far fa-envelope" style="font-size: 40px"></i>
                            </div>
                            <div class="col my-auto d-flex align-items-center ">
                                <h2 class="text-weight-bold py-auto">Email</h2>
                            </div>
                            <div class="col-2  d-flex justify-content-center my-auto">
                                <i class="fas fa-angle-right" style="font-size: 40px"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 pb-3">
                <a href="<?php echo e(url('client/email')); ?>">
                    <div class="alert alert-danger rounded" role="alert">
                        <div class="row no-gutters text-dark">
                            <div class="col-2 d-flex justify-content-center my-auto">
                                <i class="fas fa-phone-alt" style="font-size: 40px"></i>
                            </div>
                            <div class="col my-auto d-flex align-items-center ">
                                <h2 class="text-weight-bold py-auto">Telepon</h2>
                            </div>
                            <div class="col-2  d-flex justify-content-center my-auto">
                                <i class="fas fa-angle-right" style="font-size: 40px"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 pb-3">
                <a href="<?php echo e(url('client/email')); ?>">
                    <div class="alert alert-danger rounded" role="alert">
                        <div class="row no-gutters text-dark">
                            <div class="col-2 d-flex justify-content-center my-auto">
                                <i class="fab fa-whatsapp" style="font-size: 40px"></i>
                            </div>
                            <div class="col my-auto d-flex align-items-center ">
                                <h2 class="text-weight-bold py-auto">WhatsApp</h2>
                            </div>
                            <div class="col-2  d-flex justify-content-center my-auto">
                                <i class="fas fa-angle-right" style="font-size: 40px"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-client.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/bantuan.blade.php ENDPATH**/ ?>