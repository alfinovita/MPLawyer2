

<?php $__env->startSection('css'); ?>
<style>
.badge-danger {
    background: #FFD6D6;
    color: #FF2424;
    font-size: 20px
}


</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-3 font-weight-bold">Update Peraturan</h2>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $peraturan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12 py-3" style="width: 100%; border: none">
                <a href="<?php echo e(url('advokat/peraturan/'.$p->id)); ?>"> 
                    <div class="card">
                        <div class="card-body">
                        <div class="row no-gutters d-flex justify-content-between">
                            <h5 class="px-4 py-2 my-auto"><?php echo e($p->nama_peraturan); ?></h5>
                            <h5 class="px-4 py-2  my-auto">
                                <span class=" badge badge-danger px-3 py-2"><?php echo e($p->detail_count); ?></span>
                            </h5>
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
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/kategori/update-peraturan/index.blade.php ENDPATH**/ ?>