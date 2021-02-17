

<?php $__env->startSection('css'); ?>
<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: "";
        opacity: 0.9;
        background: #fff;
        width: 100%;
        height: 100%;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section block-23" style="background-image:url(<?php echo e(URL('/')); ?>/public/plugins/frontend/images/iklan_2.jpg)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row"></div>
        <div class="row justify-content-center pb-3">
            <div class="col-md-6 heading-section text-center ftco-animate">
                <h2 class="mb-5">Layanan Tertulis</h2>
            </div>
        </div>
        <?php if($tertulis->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_report_kosong.png" alt="" class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada Layanan Tertulis</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $tertulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-tertulis-<?php echo e($t->id); ?>">
                    <div class="card mx-auto shadow p-0 mb-2 bg-white rounded" style="max-width: auto;">
                        <div class="row no-gutters">
                            <div class="row justify-content-around card-body">
                                <div class="col mx-auto my-auto pr-0">
                                    <div class="row justify-content-center">
                                        <?php if($t->lawyer->avatar == ''): ?>
                                        <img src="<?php echo e(url('public/avatar-default1.png')); ?>" class="rounded-circle img-fluid" style="height: 5rem; width: 5rem;">
                                        <?php else: ?>
                                        <img src="<?php echo e(asset($t->lawyer->avatar)); ?>" class="rounded-circle img-fluid" style="height: 5rem; width: 5rem;" alt="...">
                                        <?php endif; ?>
                                        <!-- <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="..."> -->
                                    </div>
                                </div>
                                <div class="col-md-7 pl-0">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($t->lawyer->nama_lengkap); ?></h5>
                                        <h6 class="text-info">
                                            <?php if($t->status== 'WAITING'): ?>
                                            Menunggu
                                            <?php elseif($t->status =='CONFRIM'): ?>
                                            Disetujui
                                            <?php elseif($t->status =='TOLAK'): ?>
                                            Ditolak
                                            <?php else: ?>
                                            <?php echo e($t->status); ?>

                                            <?php endif; ?>
                                            Lawyer
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <p class="card-text text-muted"><?php echo e(date('d F Y', strtotime($t->created_at))); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="row card-body">
                                <div class="col mx-auto my-auto">
                                    <p class="card-title" style="color: black;">Pengajuan Somasi <?php echo e($t->konsultasi->service->nama); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <!-- <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-tertulis">
                    <div class="card mx-auto shadow p-0 mb-2 bg-white rounded" style="max-width: auto;">
                        <div class="row no-gutters">
                            <div class="row justify-content-around card-body">
                                <div class="col mx-auto my-auto pr-0">
                                    <div class="row justify-content-center">
                                        <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-7 pl-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Andira Pramanta</h5>
                                        <h6 class="text-info">Disetujui</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <p class="card-text text-muted">20 Agustus 2020 15.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="row card-body">
                                <div class="col mx-auto my-auto">
                                    <p class="card-title" style="color: black;">Pengajuan Somasi Perceraian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->

        <!-- <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-tertulis">
                    <div class="card mx-auto shadow p-0 mb-2 bg-white rounded" style="max-width: auto;">
                        <div class="row no-gutters">
                            <div class="row justify-content-around card-body">
                                <div class="col mx-auto my-auto pr-0">
                                    <div class="row justify-content-center">
                                        <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-7 pl-0">
                                    <div class="card-body">
                                        <h5 class="card-title">Andira Pramanta</h5>
                                        <h6 class="text-info">Disetujui</h6>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <p class="card-text text-muted">20 Agustus 2020 15.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="row card-body">
                                <div class="col mx-auto my-auto">
                                    <p class="card-title" style="color: black;">Pengajuan Somasi Perceraian</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
<!-- Modal -->
<?php $__currentLoopData = $tertulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modal-tertulis-<?php echo e($t->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Tertulis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-3" style="max-width: auto;">
                    <div class="row no-gutters">
                        <div class="row justify-content-around card-body">
                            <div class="col mx-auto my-auto">
                                <?php if($t->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($t->lawyer->avatar)); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                <?php endif; ?>
                                <!-- <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="..."> -->
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold m-0"><?php echo e($t->lawyer->nama_lengkap); ?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo e(date(' d F Y  H:i', strtotime($t->created_at))); ?> WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Detail Pengajuan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quidem est ipsum
                            dolorum facere! Molestiae, voluptatum sunt temporibus provident iusto optio officiis
                            dicta qui ipsum debitis officia quaerat molestias veniam?

                        </p>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Lampiran</h5>
                        <div class="alert alert-danger" role="alert">
                            <i class="icon-file-text"></i>
                            <span class="col-md-3 ml-auto"> Somasi <?php echo e($t->konsultasi->service->nama); ?>

                            </span>
                            <i class="icon-download" style="float: right;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- // -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-client.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/riwayat-konsultasi/tertulis.blade.php ENDPATH**/ ?>