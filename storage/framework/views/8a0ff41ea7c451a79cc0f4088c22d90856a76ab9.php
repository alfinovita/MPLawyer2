

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="ftco-section ">
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-10 text-center ftco-animate">
                <h2 class="pb-3 font-weight-bold">Detail Pendampingan</h2>
            </div>
        </div>
        <div class="card">
            <div class="row p-5">
                <div class="card-body m-3">
                    <div class="col pb-3">
                        <div class="row">
                            <div class="col-sm p-5">
                                <?php if($pendampingan_detail->client->avatar == ''): ?>
                                <img src="<?php echo e(url('public/avatar.png')); ?>" class="rounded-circle img-fluid"
                                    style="height: 125px; width:125px;">
                                <?php else: ?>
                                <img src="<?php echo e(asset($pendampingan_detail->client->avatar)); ?>"
                                    class="rounded-circle img-fluid" style="height: 125px; width:125px;" alt="...">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-10  my-auto">
                                <div class="card-text">
                                    <h5 class="font-weight-bold m-0"><?php echo e($pendampingan_detail->client->nama_lengkap); ?></h5>
                                    <small
                                        class="text-muted"><?php echo e(date('d F Y  H:i', strtotime($pendampingan_detail->created_at))); ?>

                                        WIB</small>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">
                        <div class="col mb-2">
                            <h5 class="font-weight-bold mb-0">Detail Pengajuan</h5>
                        </div>
                        <div class="col mb-2">
                            <small class="row  font-weight-bold justify-content-end mx-auto "
                                style="color: #FF2424;">#PNSF24356OP89JK</small>
                            <p class="my-auto">Kategori</p>
                            <h6 class="font-weight-bold mx-auto mb-3">
                                <?php echo e($pendampingan_detail->konsultasi->service->nama); ?>

                            </h6>
                        </div>
                        <div class="col mb-2">
                            <p class="my-auto"> Tanggal dan Waktu Pendampingan</p>
                            <h6 class="font-weight-bold mx-auto  mb-3 ">
                                <?php echo e(date('l, d F Y  H:i', strtotime($pendampingan_detail->created_at))); ?> WIB
                            </h6>
                        </div>
                        <div class="col mb-2">
                            <p class="my-auto">Status</p>
                            <h6 class="font-weight-bold mx-auto">
                                <?php if($pendampingan_detail->status== 'WAITING'): ?>
                                Menunggu Advokat
                                <?php elseif($pendampingan_detail->status =='CONFRIM'): ?>
                                Disetujui Advokat
                                <?php elseif($pendampingan_detail->status =='TOLAK'): ?>
                                Ditolak Advokat
                                <?php elseif($pendampingan_detail->status =='PAID'): ?>
                                Sudah Dibayar
                                <?php elseif($pendampingan_detail->status ==  'WAITING_PAYMENT'): ?>
                                Menunggu Pembayaran
                                <?php else: ?>
                                <?php echo e($pendampingan_detail->status); ?>

                                <?php endif; ?>
                                </p>
                            </h6>
                        </div>
                        <div class="col mt-4 ">
                           
                            <div class="row">
                                <?php if($pendampingan_detail->status =='WAITING'): ?>
                                <div class="col-sm mb-2 ">
                                    <button class=" btn btn-lg btn-outline-danger btn-block font-weight-bold "
                                        data-toggle="modal" data-target="#modal-tolak">Tolak</button>
                                </div>
                                <div class="col-sm mb-2 ">
                                    <button class=" btn btn-lg btn-primary btn-block font-weight-bold "
                                        data-toggle="modal" data-target="#modal-setuju">Setuju</button>
                                </div>

                                <?php elseif($pendampingan_detail->status =='TOLAK'): ?>

                                <div class="col mb-2">
                                    <p class="my-auto">Alasan Ditolak</p>
                                    <h6 class="font-weight-bold mx-auto  mb-3 ">
                                        <?php echo e($pendampingan_detail->alasan_tolak); ?>

                                    </h6>
                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<!-- Modal -->
<div class="modal fade" id="modal-setuju" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document ">
        <div class="modal-content ">
            <div class="modal-body mx-3 ">
                <div class="row justify-content-center pt-3">
                    <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/ic-lawyer-selesai.png "
                        style="width: 40%; ">
                </div>
                <div class="row justify-content-center ">
                    <p class="font-weight-bold my-3 ">Apakah Anda Bersedia Mendampingi Client?</p>
                </div>
                <div class="row mb-3 ">
                    <div class="col-sm ">
                        <button type="button " class="btn btn-outline-danger btn-block font-weight-bold my-2 "
                            data-dismiss="modal">Batal</button>
                    </div>
                    <div class="col-sm ">
                        <a class="btn btn-primary btn-block font-weight-bold my-2 "
                            href="<?php echo e(url('advokat/buat-tagihan')); ?>">
                            Setujui </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal tolak-->
<div class="modal fade" id="modal-tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document ">
        <div class="modal-content ">
            <div class="modal-body mx-3 ">
                <div class="row justify-content-center pt-3">
                    <img src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/images/icon/ic-lawyer-batal.png"
                        style="width: 40%; ">
                </div>
                <div class="row justify-content-center ">
                    <p class="font-weight-bold ">Apakah Anda Ingin Menolaknya?</p>
                </div>
                <div class="form-group ">
                    <label for="appointment_message " class="text-black ">ALASAN PENOLAKAN</label>
                    <textarea name=" " id="appointment_message " class="form-control " cols="30 " rows="5 "></textarea>
                </div>
                <div class=" form-group ">
                    <div class="row ">
                        <div class="col-sm ">
                            <button type="button " class="btn btn-outline-danger btn-block font-weight-bold my-2 "
                                data-dismiss="modal">Batal</button>
                        </div>
                        <div class="col-sm ">
                            <button type="button "
                                class="btn btn-primary btn-block font-weight-bold my-2 ">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend-advokat.layouts.app-putih', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-advokat/aktivitas/pendampingan/detail.blade.php ENDPATH**/ ?>