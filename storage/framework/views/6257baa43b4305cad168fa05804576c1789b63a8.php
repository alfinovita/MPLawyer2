<!DOCTYPE html>
<html lang="en">
<!-- Start Header -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reset Password</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/open-iconic-bootstrap.min.css">
  <!-- Font Icon -->
  <link rel="stylesheet"
    href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/dropzone.css">
  <!-- Main css -->
  <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/style-daftar.css">
  <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<!-- End Header -->

<body
  style="background: 
    linear-gradient(
      rgba(7, 7, 7, 0.349),
      rgba(255, 253, 253, 0.199)
    ),
    url(<?php echo e(URL('/')); ?>/public/plugins/fronted-advokat/images/bg_1.jpg);background-size: cover;background-attachment: fixed;">
  <div class="main ">
    <div class="col-lg-4 col-md-5 col-sm-6 mx-auto my-auto">
      <div class="card mt-5">
        <h2 class="pb-3  ">Bursa Hukum</h2>
        <form action="<?php echo e(url('client/reset-password')); ?>" class="p-5 mx-3" method="post">
          <?php echo csrf_field(); ?>
          <?php if($errors->any()): ?>
          <div class="alert alert-danger">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <?php endif; ?>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
          <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?>
        <?php if(session()->has('cancel')): ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h6><i class="icon fa fa-check"></i> Gagal!</h6>
          <?php echo e(session()->get('cancel')); ?>

        </div>
        <?php endif; ?>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
              placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repeat Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation"
              placeholder="Password">
          </div>
            <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary btn-block font-weight-bold " role="button">Change Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- JS -->
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/jquery/jquery.min.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/jquery-validation/dist/jquery.validate.min.js">
  </script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/jquery-validation/dist/additional-methods.min.js">
  </script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/jquery-steps/jquery.steps.min.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/minimalist-picker/dobpicker.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/JSregister/jquery.pwstrength/jquery.pwstrength.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/js/dropzone.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/js/daftar.js"></script>
</body>

</html><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/reset-password.blade.php ENDPATH**/ ?>