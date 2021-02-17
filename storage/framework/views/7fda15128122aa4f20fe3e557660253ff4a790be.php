

<?php $__env->startSection('css'); ?>
<style>
    hr {
        border-top: 1px solid #007bff;
        width: 70%;
    }

    a {
        color: #000;
    }

    .card {
        background-color: #ffffff;
        padding: 0;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
    }

    .card:hover {
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
        color: black;
    }

    address {
        margin-bottom: 0px;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section block-23" style="background-image:url(<?php echo e(URL('/')); ?>/public/plugins/frontend/images/iklan_2.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-3s pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="pb-3 font-weight-bold">Update Peraturan</h2>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $peraturan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3" style="width: 100%; border: none">
                <a href="<?php echo e(url('client/peraturan/'.$p->id)); ?>">
                    <div class="card-body2">
                        <div class="row align-items-center">
                            <div class="col-lg-10">
                                <div class="dept_info"><?php echo e($p->nama_peraturan); ?></div>
                            </div>
                            <div class="col-lg-2">
                                <div class="dept_info" style="padding: 30px">
                                    <span class="border" style="padding: 10px 18px 10px 18px; background-color: #e9b8b8; color: #ff2424; border: none; border-radius: 10%"><?php echo e($p->detail_count); ?></span>
                                </div>
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
<?php echo $__env->make('frontend-client.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/detail-home/update-peraturan.blade.php ENDPATH**/ ?>