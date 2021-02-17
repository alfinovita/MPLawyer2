<nav class="navbar navbar-expand-lg ftco-navbar-light site-navbar-target scrolled awake" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Bursa Hukum</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo e(url('client/home')); ?>" class="nav-link"><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('client/chat')); ?>" class="nav-link"><span>Konsultasi</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('client/riwayat')); ?>" class="nav-link"><span>Riwayat</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('client/profil')); ?>" class="nav-link"><span>Profil</span></a>
                </li>

                <li class="nav-item nav-link my-auto ">
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" type="button" href="<?php echo e(url('client/bantuan')); ?>">Bantuan</a>
                            <a class="dropdown-item" type="button" href="<?php echo e(url('client/FAQ')); ?>">FAQ</a>
                            <a class="dropdown-item" type="button" href="<?php echo e(url('client/kebijakan-privasi')); ?>">Kebijakan Privasi</a>
                            <a class="dropdown-item text-danger" type="button" data-toggle="modal" data-target="#logout-modal" href="#">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/layouts/navbar-putih.blade.php ENDPATH**/ ?>