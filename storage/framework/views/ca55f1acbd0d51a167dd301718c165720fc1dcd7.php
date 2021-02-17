

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="hero-wrap js-fullheight" style="background-image: url('<?php echo e(asset($event->gambar)); ?>')" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo e($event->nama); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- deskripsi event -->
<section class="ftco-section bg-light" id="section-counter ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3 pt-5"><?php echo e($event->nama); ?></h2>
                <p class="text-danger "><span class="far fa-calendar-alt"><strong><?php echo e(date(' d M Y', strtotime($event->tanggal))); ?></strong> </span> &nbsp;<span class="fas fa-map-marker-alt"><strong> Gedung Merdeka</strong></span></span>
                </p>
                <p><?php echo e($event->deskripsi); ?></p>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Event lainya</h3>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('<?php echo e(asset($e->gambar)); ?>')"></a>
                        <div class="text">
                        <h3 class="heading artikel"><a href="<?php echo e(url('advokat/event/'.$e->id)); ?>"><?php echo e($e->nama); ?></a>
                            </h3>
                            <div class="meta">
                                <div><a href="#"><span class="far fa-calendar-alt"></span> <?php echo e(date('d M Y', strtotime($e->tanggal))); ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('frontend-advokat.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/event/index.blade.php ENDPATH**/ ?>