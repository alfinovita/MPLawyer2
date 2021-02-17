

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="hero-wrap js-fullheight" style="background-image:url('<?php echo e(asset($slider_client->image)); ?>')"
    data-section="home">

    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">

        </div>
    </div>
</section>

<section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col d-flex order-md-last">
                <div class="row justify-content-start py-3 py-lg-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-5 text-center" style="font-size: 40px; text-transform: capitalize">
                            <?php echo e($slider_client->judul); ?></h2>
                        <div class="row">
                            <div class="col-lg-12 ftco-animate">
                                <p><?php echo e($slider_client->deskripsi); ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-client.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/detail-home/detail-slider-client.blade.php ENDPATH**/ ?>