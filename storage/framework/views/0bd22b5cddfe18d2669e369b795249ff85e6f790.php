

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section block-23"
    style="background-image:url(<?php echo e(URL('/')); ?>/public/plugins/frontend/images/iklan_2.jpg)">
    <div class="overlay"></div>

    <div class="container">
        <div class="row justify-content-center mt-5 mb-3s pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <?php if(request()->is('client/cari*')): ?>
                    <?php if($search==''): ?>
                       <h2 class="mb-2">tidak ada</h2> 
                    <?php else: ?>
                    <h2 class="mb-2">Hasil Pencarian <?php echo e($search); ?></h2>
                    <?php endif; ?>
                <?php else: ?>
                <h2 class="mb-2">ADVOKAT ONLINE</h2>
                <?php endif; ?>
            </div>
        </div>
        <?php $__currentLoopData = $advokat_online; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($m->status_app == true): ?>
        <div class="card mb-3" style="
                    width: 100%;
                    border: none;
                    -webkit-box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.2);
                    -moz-box-shadow: 5px 5px 10px 0px rgba(75, 43, 43, 0.2);
                    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.2);
                  ">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <?php if($m->avatar == ''): ?>
                        <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/img_profil_default.png" alt="Avatar"
                            width="120px" height="120px;" style="border-radius: 50%;">
                        <?php else: ?>
                        <img src="<?php echo e(asset($m->avatar)); ?>" alt=""
                            style="border-radius: 50%; width: 120px; height:120px;" />
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <h3><?php echo e($m->nama_lengkap); ?></h3>
                        <p style="color: #ff2424"><?php echo e($m->lawyer_detail->gelar); ?></p>
                    </div>
                    <div class="col-lg-2 align-self-center">
                        <a href="<?php echo e(url('client/detail_lawyer_online/'.$m->id)); ?>"
                            class="btn btn-primary btn-lg">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-client.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/detail-home/live-chat.blade.php ENDPATH**/ ?>