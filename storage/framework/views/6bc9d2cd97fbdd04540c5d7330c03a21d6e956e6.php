<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3"><?php echo e(session()->get('user')->role); ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?php echo e(request()->is('home')?'active':''); ?>">
  <a class="nav-link" href="<?php echo e(route('home')); ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Users
</div>
<!-- Admin -->
<li class="nav-item <?php echo e(request()->is('admin*')?'active':''); ?>">
  <a class="nav-link" href="<?php echo e(url('admin')); ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Admin</span></a>
</li>

<!-- Lawyer -->
<li class="nav-item has-treeview <?php echo e(request()->is('user-lawyer*', 'pengajuan-lawyer*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLawyers" aria-expanded="true" aria-controls="collapseLawyers">
    <i class="fas fa-fw fa-balance-scale"></i>
    <span>Advokat</span>
  </a>
  <div id="collapseLawyers" class="collapse <?php echo e(request()->is('user-lawyer*', 'pengajuan-lawyer*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded ">
      <a class="collapse-item bg-<?php echo e(request()->is('user-lawyer*')?'primary':''); ?> text-<?php echo e(request()->is('user-lawyer*')?'light':''); ?>" href="<?php echo e(url('user-lawyer')); ?>">Daftar Advokat</a>
      <a class="collapse-item bg-<?php echo e(request()->is('pengajuan-lawyer*')?'primary':''); ?> text-<?php echo e(request()->is('pengajuan-lawyer*')?'light':''); ?>" href="<?php echo e(url('pengajuan-lawyer')); ?>">Konfirmasi Membership</a>
    </div>
  </div>
</li>

<!-- Client -->
<li class="nav-item has-treeview <?php echo e(request()->is('user-client*', 'client-konfirmasi*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
    <i class="fas fa-fw fa-users"></i>
    <span>Client</span>
  </a>
  <div id="collapseUsers" class="collapse <?php echo e(request()->is('user-client*', 'client-konfirmasi*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('user-client*')?'primary':''); ?> text-<?php echo e(request()->is('user-client*')?'light':''); ?>" href="<?php echo e(url('user-client')); ?>">Daftar Client</a>
      <a class="collapse-item bg-<?php echo e(request()->is('client-konfirmasi*')?'primary':''); ?> text-<?php echo e(request()->is('client-konfirmasi*')?'light':''); ?>" href="<?php echo e(url('client-konfirmasi')); ?>">Verifikasi Client</a>
    </div>
  </div>
</li>

<!-- Notaris -->
<li class="nav-item has-treeview <?php echo e(request()->is('user-notaris*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotaris" aria-expanded="true" aria-controls="collapseNotaris">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Notaris</span>
  </a>
  <div id="collapseNotaris" class="collapse <?php echo e(request()->is('user-notaris*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('user-notaris*')?'primary':''); ?> text-<?php echo e(request()->is('user-notaris*')?'light':''); ?>" href="<?php echo e(url('user-notaris')); ?>">Daftar Notaris</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
  Main Menu
</div>

<!-- Slider -->
<li class="nav-item <?php echo e(request()->is('slider*')?'active':''); ?>">
  <a class="nav-link collapseSlider" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true" aria-controls="collapseSlider">
    <i class="fas fa-fw fa-sliders-h"></i>
    <span>Slider</span>
  </a>
  <div id="collapseSlider" class="collapse <?php echo e(request()->is('slider*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Slider</h6>
      <a class="collapse-item bg-<?php echo e(request()->is('slider-lawyer*')?'primary':''); ?> text-<?php echo e(request()->is('slider-lawyer*')?'light':''); ?>" href="<?php echo e(url('slider-lawyer')); ?>">Daftar Slider Advokat</a>
      <a class="collapse-item bg-<?php echo e(request()->is('slider-client*')?'primary':''); ?> text-<?php echo e(request()->is('slider-client*')?'light':''); ?>" href="<?php echo e(url('slider-client')); ?>">Daftar Slider Client</a>
      <a class="collapse-item bg-<?php echo e(request()->is('slider-iklan*')?'primary':''); ?> text-<?php echo e(request()->is('slider-iklan*')?'light':''); ?>" href="<?php echo e(url('slider-iklan')); ?>">Daftar Slider Iklan</a>
    </div>
  </div>
</li>
<!-- Service -->
<li class="nav-item has-treeview <?php echo e(request()->is('service*')?'active':''); ?>">
  <a class="nav-link collapsedService" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true" aria-controls="collapseService">
    <i class="fas fa-fw fa-tools"></i>
    <span>Bidang Hukum</span>
  </a>
  <div id="collapseService" class="collapse <?php echo e(request()->is('service*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Bidang Hukum</h6>
      <a class="collapse-item bg-<?php echo e(request()->is('service*')?'primary':''); ?> text-<?php echo e(request()->is('service*')?'light':''); ?>" href="<?php echo e(url('service')); ?>">Daftar Bidang Hukum</a>
    </div>
  </div>
</li>

<!-- Layanan -->
<li class="nav-item has-treeview <?php echo e(request()->is('kategori-lawyer*', 'kategori-client*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori" aria-expanded="true" aria-controls="collapseKategori">
    <i class="fas fa-fw fa-hand-holding"></i>
    <span>Layanan Favorite</span>
  </a>
  <div id="collapseKategori" class="collapse <?php echo e(request()->is('kategori-lawyer*', 'kategori-client*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('kategori-lawyer*')?'primary':''); ?> text-<?php echo e(request()->is('kategori-lawyer*')?'light':''); ?>" href="<?php echo e(url('kategori-lawyer')); ?>">Layanan Advokat</a>
      <a class="collapse-item bg-<?php echo e(request()->is('kategori-client*')?'primary':''); ?> text-<?php echo e(request()->is('kategori-client*')?'light':''); ?>" href="<?php echo e(url('kategori-client')); ?>">Layanan Client</a>
    </div>
  </div>
</li>

<!-- Legalitas -->
<li class="nav-item has-treeview <?php echo e(request()->is('legalitas*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLegalitas" aria-expanded="true" aria-controls="collapseLegalitas">
    <i class="fas fa-fw fa-list"></i>
    <span>Legalitas</span>
  </a>
  <div id="collapseLegalitas" class="collapse <?php echo e(request()->is('legalitas*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('legalitas*')?'primary':''); ?> text-<?php echo e(request()->is('legalitas*')?'light':''); ?>" href="<?php echo e(url('legalitas')); ?>">Legalitas</a>
    </div>
  </div>
</li>
<li class="nav-item <?php echo e(request()->is('events*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('events')); ?>">
    <i class="fas fa-fw fa-calendar-week"></i>
    <span>Event</span>
  </a>
</li>
<li class="nav-item <?php echo e(request()->is('artikel*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('artikel')); ?>">
    <i class="fas fa-fw fa-edit"></i>
    <span>Artikel</span>
  </a>
</li>


<li class="nav-item <?php echo e(request()->is('peraturan*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('peraturan')); ?>">
    <i class="fas fa-fw fa-sticky-note"></i>
    <span>Peraturan</span>
  </a>
</li>

<li class="nav-item <?php echo e(request()->is('mahkamahagung*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('mahkamahagung')); ?>">
    <i class="fas fa-fw fa-home"></i>
    <span>Mahkamah Agung</span>
  </a>
</li>

<li class="nav-item <?php echo e(request()->is('vidcon*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('vidcon')); ?>">
    <i class="fas fa-fw fa-file-video"></i>
    <span>Video Conference</span>
  </a>
</li>

<li class="nav-item <?php echo e(request()->is('pertemuan*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('pertemuan')); ?>">
    <i class="fas fa-fw fa-calendar-alt"></i>
    <span>Pertemuan</span>
  </a>
</li> 

<li class="nav-item <?php echo e(request()->is('pendampingan*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('pendampingan')); ?>">
    <i class="fas fa-fw fa-share-square"></i>
    <span>Pendampingan</span>
  </a>
</li>

<li class="nav-item <?php echo e(request()->is('tertulis*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('tertulis')); ?>">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Tertulis</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Pelayanan
</div>

<!-- Ruang Penawaran -->
<li class="nav-item has-treeview <?php echo e(request()->is('penawaran-lawyer*', 'penawaran-kantor*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenawaran" aria-expanded="true" aria-controls="collapsePenawaran">
    <i class="fas fa-fw fa-hand-holding"></i>
    <span>Ruang Penawaran</span>
  </a>
  <div id="collapsePenawaran" class="collapse <?php echo e(request()->is('penawaran-lawyer*', 'penawaran-kantor*')?'show':''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('penawaran-lawyer*')?'primary':''); ?> text-<?php echo e(request()->is('penawaran-lawyer*')?'light':''); ?>" href="<?php echo e(url('penawaran-lawyer')); ?>">Advokat</a>
      <a class="collapse-item bg-<?php echo e(request()->is('penawaran-kantor*')?'primary':''); ?> text-<?php echo e(request()->is('penawaran-kantor*')?'light':''); ?>" href="<?php echo e(url('penawaran-kantor')); ?>">Kantor Hukum</a>
    </div>
  </div>
</li>

<li class="nav-item <?php echo e(request()->is('vicon*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConsult" aria-expanded="true" aria-controls="collapseConsult">
    <i class="fas fa-fw fa-gavel"></i>
    <span>Konsultasi</span>
  </a>
  <div id="collapseConsult" class="collapse <?php echo e(request()->is('konsultasi*')?'show':''); ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Daftar Konsultasi:</h6>
      <a class="collapse-item bg-<?php echo e(request()->is('konsultasi-ongoing*')?'primary':''); ?> text-<?php echo e(request()->is('konsultasi-ongoing*')?'light':''); ?>" href="<?php echo e(url('konsultasi-ongoing')); ?>">Konsultasi Berlangsung</a>
      <a class="collapse-item bg-<?php echo e(request()->is('konsultasi-finish*')?'primary':''); ?> text-<?php echo e(request()->is('konsultasi-finish*')?'light':''); ?>" href="<?php echo e(url('konsultasi-finish')); ?>">Konsultasi Selesai</a>
      <a class="collapse-item bg-<?php echo e(request()->is('konsultasi-history*')?'primary':''); ?> text-<?php echo e(request()->is('konsultasi-history*')?'light':''); ?>" href="<?php echo e(url('konsultasi-history')); ?>">History Konsultasi</a>
    </div>
  </div>
</li>
<!-- Pembayaran -->
<li class="nav-item <?php echo e(request()->is('pembayaran*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment">
    <i class="fas fa-fw fa-money-bill-alt"></i>
    <span>Pembayaran</span>
  </a>
  <div id="collapsePayment" class="collapse <?php echo e(request()->is('pembayaran*')?'show':''); ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Daftar Pembayaran:</h6>
      <a class="collapse-item bg-<?php echo e(request()->is('pembayaran-berhasil*')?'primary':''); ?> text-<?php echo e(request()->is('pembayaran-berhasil*')?'light':''); ?>" href="<?php echo e(url('pembayaran-berhasil')); ?>">Pembayaran Berhasil</a>
      <a class="collapse-item bg-<?php echo e(request()->is('pembayaran-pending*')?'primary':''); ?> text-<?php echo e(request()->is('pembayaran-pending*')?'light':''); ?>" href="<?php echo e(url('pembayaran-pending')); ?>">Pembayaran Pending</a>
      <a class="collapse-item bg-<?php echo e(request()->is('pembayaran-expired*')?'primary':''); ?> text-<?php echo e(request()->is('pembayaran-expired*')?'light':''); ?>" href="<?php echo e(url('pembayaran-expired')); ?>">Pembayaran Expired</a>
    </div>
  </div>
</li>
<!-- Pengaturan -->
<li class="nav-item <?php echo e(request()->is('privacy*', 'faq*', 'help*', 'settings*')?'active':''); ?>">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan" aria-expanded="true" aria-controls="collapsePengaturan">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Pengaturan</span>
  </a>
  <div id="collapsePengaturan" class="collapse <?php echo e(request()->is('privacy*', 'faq*', 'help*', 'settings*')?'show':''); ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item bg-<?php echo e(request()->is('privacy*')?'primary':''); ?> text-<?php echo e(request()->is('privacy*')?'light':''); ?>" href="<?php echo e(url('privacy')); ?>">Privacy Police</a>
      <a class="collapse-item bg-<?php echo e(request()->is('faq*')?'primary':''); ?> text-<?php echo e(request()->is('faq*')?'light':''); ?>" href="<?php echo e(url('faq')); ?>">FAQ</a>
      <a class="collapse-item bg-<?php echo e(request()->is('help*')?'primary':''); ?> text-<?php echo e(request()->is('help*')?'light':''); ?>" href="<?php echo e(url('help')); ?>">Bantuan</a>
      <a class="collapse-item bg-<?php echo e(request()->is('settings*')?'primary':''); ?> text-<?php echo e(request()->is('settings*')?'light':''); ?>" href="<?php echo e(url('settings')); ?>">Pengaturan</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  LIVE CHAT
</div>

<li class="nav-item <?php echo e(request()->is('report*')?'active':''); ?>">
  <a class="nav-link collapsed" href="<?php echo e(url('report')); ?>">
    <i class="fas fa-fw fa-download"></i>
    <span>Report</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar --><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>