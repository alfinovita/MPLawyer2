

<?php $__env->startSection('content'); ?>
<section class="hero-wrap js-fullheight" style="background-image: url('<?php echo e(asset($event->gambar)); ?>')"
    data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center text-center"
            data-scrollax-parent="true">
            <div class="col-md ftco-animate" style="margin-top: 200px;"
                data-scrollax=" properties: { translateY: '70%' }">
                <h2 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo e($event->nama); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ftco-counter-wrap" style="margin-top: -200px;">
                    <div class="row no-gutters d-md-flex align-items-center align-items-stretch">
                        <div class="col d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                    <span>Tanggal</span>
                                    <strong><?php echo e(date(' d M Y', strtotime($event->tanggal))); ?></strong>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <span>Lokasi</span>
                                    <strong><?php echo e($event->lokasi); ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-6 d-flex order-md-last">
                <div class="row justify-content-start py-3 py-lg-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Event</span>
                        <h2 class="mb-4" style="font-size: 36px; text-transform: capitalize"><?php echo e($event->nama); ?></h2>
                        <p>
                            <?php echo e($event->deskripsi); ?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 sidebar ftco-animate">
                <div class="sidebar-box mt-3">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Cari Event Disini" />
                        </div>
                    </form>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Event Lainnya</h3>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image:url('<?php echo e(asset($m->gambar)); ?>')"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#"><?php echo e($m->nama); ?></a></h3>
                            <div class="meta">
                                <div>
                                    <a href="#"><span
                                            class="icon-calendar">&nbsp;</span><?php echo e(date('d M Y', strtotime($m->tanggal))); ?></a>
                                </div>
                                
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
<?php echo $__env->make('frontend-client.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/detail-home/detail-event.blade.php ENDPATH**/ ?>