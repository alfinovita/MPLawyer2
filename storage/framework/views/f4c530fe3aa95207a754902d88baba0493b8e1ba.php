

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- artikel -->
<body class="bg-light">
    <section class="ftco-section mt-5" id="blog-section ">
        <div class="container ">
            <div class="row justify-content-center mb-5 pb-5 ">
                <div class="col-md-10  text-center ftco-animate ">
                    <h2 class="mb-4 font-weight-bold">Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row  ">
                <div class="owl-carousel carousel-artikel ">
                    <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item  ftco-animate  mx-3">
                        <div class="card rounded mb-3">
                            <a href="<?php echo e(url('advokat/detailArtikel/'.$a->id)); ?>">
                                <img class="card-img-top rounded-top " src="<?php echo e(asset($a->image)); ?>" alt="Card image cap "
                                    style="height: 300px;">
                                <div class="card-body">
                                    <div class="card-text ">
                                        <h5 class=" font-weight-bold artikel"><?php echo e($a->judul); ?>

                                        </h5>
                                        <p class="text-muted  "><span
                                                class="far fa-calendar-alt "></span><?php echo e(date(' d F Y', strtotime($a->release_date))); ?>

                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- event -->
    <section class="ftco-section ftco-no-pt " id="section-event ">
        <div class="container ">
            <div class="row justify-content-center mb-5 pb-5 ">
                <div class="col-md-10  text-center ftco-animate ">
                    <h2 class="mb-4 font-weight-bold">Event</h2>
                </div>
            </div>
    
            <div class="row ">
    
                <div class="owl-carousel  carousel-event">
                    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item mx-3">
    
                        <div class="card rounded mb-3  ftco-animate ">
                            <a href="<?php echo e(url('advokat/event/'.$m->id)); ?>">
                                <img class="card-img-top rounded-top " src="<?php echo e(asset($m->gambar)); ?>" alt="Card image cap "
                                    style="height: 250px;">
                                <div class="card-body">
                                    <div class="card-text ">
                                        <h5 class=" text-weight-bold event"><strong><?php echo e($m->nama); ?></strong>
                                        </h5>
                                        <p class="text-muted m-0 "><span
                                                class="far fa-calendar-alt"></span><?php echo e(date(' d F Y', strtotime($m->tanggal))); ?>

                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>  
</body>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/navbar-awal/blog/index.blade.php ENDPATH**/ ?>