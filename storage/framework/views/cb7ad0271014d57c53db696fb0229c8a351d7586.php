

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-4 font-weight-bold">Tagihan</h2>
            </div>
        </div>
        <?php if($tagihan->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_invoice_kosong.png"
                    alt="" class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $tagihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="row justify-content-center pb-3">
             <div class=" col-lg-12">
                <a href="#" data-toggle="modal" data-target="#modal-tagihan">
                    <div class="card mx-auto shadow p-3 mb-5 " style="max-width: auto;">
                        <div class="row no-gutters">
                            <div class="row justify-content-around card-body">
                                <div class="col-lg col-md mx-auto my-auto pr-0">
                                    <div class="row justify-content-center">
                                    <?php if($t->client->avatar == ''): ?>
                                        <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset($t->client->avatar)); ?>"
                                        class="rounded-circle img-fluid" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                    <?php endif; ?>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7  pl-0">
                                    <div class="card-body">
                                    <h5 class="card-title font-weight-bold"><?php echo e($t->client->nama_lengkap); ?></h5>
                                        <h6 class="text-info">
                                            <?php if($t->status =='PAID'): ?>
                                            Sudah Dibayar           
                                            <?php else: ?>
                                            Menunggu Pembayaran 
                                            <?php endif; ?>
                                          
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3  my-auto">
                                    <p class="card-text text-muted"><?php echo e(date('d F Y', strtotime($t->created_at))); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="row card-body">
                                <div class="col mx-auto my-auto">
                                    <h2>Rp. <?php echo number_format($t->amount, 0, ',', '.'); ?> </h2>
                                    <p class="card-title mb-0">Pengajuan Layanan
                                    <?php if($t->type == 'VICON'): ?>
                                        Video Conference
                                    <?php elseif($t->type == 'LIVE_CHAT'): ?>
                                        Konsultasi
                                     <?php elseif($t->type == 'PENDAMPINGAN'): ?>
                                        Pendampingan
                                     <?php elseif($t->type == 'TERTULIS'): ?>
                                        somasi
                                     <?php elseif($t->type == 'PERTEMUAN'): ?>
                                        pertemuan
                                    <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
      
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/aktivitas/tagihan/index.blade.php ENDPATH**/ ?>