

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
            <?php $__currentLoopData = $mahkamah_agung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row justify-content-center  mb-3 ftco-animate">
                <div class="col-sm mx-5 my-3 alert alert-danger">
                <img src="<?php echo e(asset($m->gambar)); ?>" alt="" class="rounded d-block mx-auto mt-3 " style="width: 15%;">
                    <div class="row justify-content-center">
                    <a href="<?php echo e($m->link); ?>" target="_blank" class="mx-auto d-block mb-3"><?php echo e($m->judul); ?></a>
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
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/kategori/mahkamah-agung/index.blade.php ENDPATH**/ ?>