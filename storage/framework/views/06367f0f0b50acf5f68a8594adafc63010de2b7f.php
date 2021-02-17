

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- content -->
    <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center my-4">
                <div class="col-md-10 text-center ftco-animate">
                    <h2 class="pb-3 font-weight-bold">Mahkamah Agung</h2>
                </div>
            </div>
            <div class="row justify-content-center  mb-3 ftco-animate">
                <div class="col-sm mx-5 my-3 alert alert-danger">
                    <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/logo-mahkamah-agung.png" alt="" class="rounded d-block mx-auto mt-3 " style="width: 15%;">
                    <div class="row justify-content-center">
                        <a href="" class="mx-auto d-block mb-3">Pencarian Perkara</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center  mb-3 ftco-animate">
                <div class="col-sm  mx-5 my-3 alert alert-danger">
                    <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/logo-mahkamah-agung.png" alt="" class="rounded d-block mx-auto mt-3 " style="width: 15%;">
                    <div class="row justify-content-center">
                        <a href="" class="mx-auto d-block mb-3">Ecourt</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/mahkamah-agung.blade.php ENDPATH**/ ?>