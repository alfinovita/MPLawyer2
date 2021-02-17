

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- artikel detil -->
<section class="ftco-section">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3 pt-5 "><?php echo e($artikel->judul); ?></h2>
                <p class="mb-0"><span class="far fa-calendar-alt text-muted "> <?php echo e(date(' d F Y', strtotime($artikel->release_date))); ?> &ensp;&bull;</span> <a
                        class="text-danger px-2">Oleh <?php echo e($artikel->user->nama_lengkap); ?></a>
                </p>
                <p>
                    <img src="<?php echo e(asset($artikel->image)); ?>" alt="" class="img-fluid">
                </p>
                <p><?php echo e($artikel->content); ?></p>
                <div class="d-flex justify-content-between">
                    <div class="">
                        <span class="icon-heart d-flex align-items-center" href="#"> <small>&ensp;<?php echo e(count($artikel->like)); ?> suka</small></span>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="icon-chat  d-flex align-items-center"><small>&ensp;<?php echo e(count($artikel->comment)); ?> Komentar</small></span>

                    </div>
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <span class="icon-share"></span>
                    </div>
                </div>

                <!-- komentar -->
                <div class="pt-5 mt-5">
                    <h5 class="mb-5"><?php echo e(count($artikel->comment)); ?> Komentar</h5>
                    <?php if(count($artikel->comment)==0): ?>
                        <div class="row d-flex justify-content-center mt-3 mb-4 pt-4 pb-5">
                            <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_komentar_kosong.png" 
                            style="width: 30%; height:auto;" class="d-block mx-auto">
                        </div>
                    <?php else: ?>
                    <a href="" style="float: right;">Lihat semua</a>
                    <ul class="comment-list">
                        <?php $__currentLoopData = $artikel->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="comment">
                            <div class="vcard bio">
                                <?php if($c->user->avatar==''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" class="rounded-circle img-fluid"
                                style="height: 4rem; width: 4rem;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($c->user->avatar)); ?>" class="rounded-circle img-fluid"
                                style="height: 4rem; width: 4rem;">
                                <?php endif; ?>
                            </div>
                            <div class="comment-body">
                            <h5><?php echo e($c->user->nama_lengkap); ?></h5>
                                <div class="meta"><?php echo e(date(' d F Y  H:i', strtotime($c->created_at))); ?> WIB</div>
                                <p><?php echo e($c->komentar); ?>

                                </p>
                                <hr>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                    <!-- END comment-list -->
                    <div class="comment-form-wrap pt-5">
                        <h5 class="mb-5">Tinggalkan Komentar</h5>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group p-5">
                                <textarea name="" id="message" cols="5" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group px-3">
                                <input type="submit" value="Kirim Komentar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--  artikel lainya -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h5 class="heading-sidebar">Artikel Lainya</h5>
                    <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('<?php echo e(asset($a->image)); ?>')"></a>
                        <div class="text">
                            <h5 class="heading artikel"><a href="<?php echo e(url('advokat/detailArtikel/'.$a->id)); ?>"><?php echo e($a->judul); ?></a>
                            </h5>
                            <div class="meta">
                                <div><a href=""><span class="far fa-calendar-alt"></span><?php echo e(date(' d F Y', strtotime($a->release_date))); ?></a></div>
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
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/artikel/index.blade.php ENDPATH**/ ?>