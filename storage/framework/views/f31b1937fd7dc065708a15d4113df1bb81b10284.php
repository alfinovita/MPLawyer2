

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
                <h2 class="mb-5">Pendampingan</h2>
            </div>
        </div>
        <?php if($pendampingan->isEmpty()): ?>
        <div class="row justify-content-center  ftco-animate">
            <div class="col-sm m-5 ">
                <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/img_mpl_belum_ada_pendampingan.png" alt="" class="d-block mx-auto" style="width: 30%; ">
                <div class="row justify-content-center">
                    <div class="col-sm-5 my-3">
                        <h5 class="font-weight-bold text-danger" style="text-align: center;">Tidak Ada Pendampingan</h5>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php $__currentLoopData = $pendampingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-detail-<?php echo e($p->id); ?>">
                    <div class="card mx-auto shadow p-0 mb-2 bg-white rounded" style="max-width: auto;">
                        <div class="row no-gutters">
                            <div class="row justify-content-around card-body">
                                <div class="col mx-auto my-auto pr-0">
                                    <div class="row justify-content-center">
                                        <?php if($p->lawyer->avatar == ''): ?>
                                        <img src="<?php echo e(url('public/avatar-default1.png')); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;">
                                        <?php else: ?>
                                        <img src="<?php echo e(asset($p->lawyer->avatar)); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                        <?php endif; ?>
                                        <!-- <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="..."> -->
                                    </div>
                                </div>
                                <div class="col-md-7 pl-0">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($p->lawyer->nama_lengkap); ?></h5>
                                        <h6 class="text-info">
                                            <?php if($p->status== 'WAITING'): ?>
                                            Menunggu
                                            <?php elseif($p->status =='CONFRIM' || 'PAID'): ?>
                                            Disetujui
                                            <?php elseif($p->status =='TOLAK'): ?>
                                            Ditolak
                                            <?php else: ?>
                                            <?php echo e($p->status); ?>

                                            <?php endif; ?>
                                            Lawyer
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <p class="card-text text-muted"><?php echo e(date('d F Y ', strtotime($p->created_at))); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="row card-body">
                                <div class="col mx-auto my-auto">
                                    <p class="card-title" style="color: black;">Pendampingan <?php echo e($p->konsultasi->service->nama); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <!-- <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-detail">
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
                                    <p class="card-title" style="color: black;">Pendampingan Personal Injury</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
        </div> -->
        <!-- <div class="row justify-content-center pb-3">
            <div class="col-md-5 col-lg-12">
                <a data-toggle="modal" data-target="#modal-detail">
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
                                    <p class="card-title" style="color: black;">Pendampingan Personal Injury</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
        </div> -->
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
<!-- Modal -->
<?php $__currentLoopData = $pendampingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modal-detail-<?php echo e($p->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pendampingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-3" style="max-width: auto;">
                    <div class="row no-gutters">
                        <div class="row justify-content-around card-body">
                            <div class="col mx-auto my-auto">
                                <?php if($p->lawyer->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar-default1.png')); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($p->lawyer->avatar)); ?>" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="...">
                                <?php endif; ?>
                                <!-- <img src="<?php echo e(url('public/plugins/frontend')); ?>/images/person_2.jpg" class="rounded-circle img-fluid" style="height: 100px; width: 100px;" alt="..."> -->
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold m-0"><?php echo e($p->lawyer->nama_lengkap); ?></h5>
                                    <p class="card-text"><small class="text-muted"><?php echo e(date('d F Y ', strtotime($p->created_at))); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Detail Pengajuan</h5>
                        <p class="text-danger" style="float: right;">#PNSF32423CX2319</p>
                        <p class="card-text m-0">Kategori</p>
                        <h5 class="card-text">Pendampingan <?php echo e($p->konsultasi->service->nama); ?> </h5>
                        <br>
                        <p class="card-text m-0">Tanggal & Waktu Video Conference</p>
                        <h5 class="card-text"><?php echo e(date('d F Y ', strtotime($p->created_at))); ?></h5>
                        <br>
                        <p class="card-text m-0">Status</p>
                        <h5 class="card-text"> <?php if($p->status== 'WAITING'): ?>
                            Menunggu
                            <?php elseif($p->status =='CONFRIM' || 'PAID'): ?>
                            Disetujui
                            <?php elseif($p->status =='TOLAK'): ?>
                            Ditolak
                            <?php else: ?>
                            <?php echo e($p->status); ?>

                            <?php endif; ?>
                            Lawyer</h5>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Detail Tagihan</h5>
                        <p class="card-text m-0">Total Tagihan</p>
                        <h5 class="card-text font-weight-bold">Rp. <?php echo number_format($p->amount, 0, ',', '.'); ?></h5>
                        <br>
                        <p class="card-text m-0">Nomor Tagihan</p>
                        <button type="button" class="btn text-white rounded my-auto" style="background-color: #FF2424; float: right;">Salin</button>

                        <h5 class="text-danger">123dhdjbjf</h5>
                        <br>
                        <p class="card-text m-0">Ketentuan Pembayaran</p>
                        <p class="card-text m-0">1. Pilih Menu Lain > Transfer</p>
                        <p class="card-text m-0">2. Pilih jenis rekening asal dan pilih Virtual Account Billing</p>
                        <p class="card-text m-0">3. Masukan nomor Virtual Account (123dhdjbjf) dan pilih Benar</p>
                        <p class="card-text m-0">4. Tagihan yang harus dibayar akan muncul pada layar konfirmasi</p>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-client.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/riwayat-konsultasi/pendampingan.blade.php ENDPATH**/ ?>