
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Page Forbidden</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(url('public/plugins/sb-admin')); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(url('public/plugins/sb-admin')); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="440">440</div>
            <p class="lead text-gray-800 mb-5">Forbidden</p>
            <p class="text-gray-500 mb-0">Please do login first</p>
            <?php if(request()->is('client*')): ?>
            <a href="<?php echo e(url('client')); ?>">&larr; Back to Login</a>
            <?php elseif(request()->is('advokat*')): ?>
            <a href="<?php echo e(url('advokat')); ?>">&larr; Back to Login</a>
            <?php else: ?>
            <a href="<?php echo e(url('core')); ?>">&larr; Back to Dashboard</a>
            <?php endif; ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(url('public/plugins/sb-admin')); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo e(url('public/plugins/sb-admin')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(url('public/plugins/sb-admin')); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo e(url('public/plugins/sb-admin')); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>
<?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/errors/440.blade.php ENDPATH**/ ?>