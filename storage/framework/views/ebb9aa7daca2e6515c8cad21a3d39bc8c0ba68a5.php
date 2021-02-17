<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <title>Sign Up Form</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/open-iconic-bootstrap.min.css">

    <link rel="stylesheet"
        href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/dropzone.css">

    <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/style-daftar.css">
    <link rel="stylesheet" href="<?php echo e(url('public/plugins/fronted-advokat')); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <?php echo $__env->yieldContent('css'); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php echo $__env->make('frontend-client.layouts.navbar-awal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('modal'); ?>

    <?php echo $__env->yieldContent('js'); ?>
    <?php echo $__env->make('frontend-client.layouts.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend-client.layouts.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/main.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/dropzone/dropzone.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/aktivitas/main.js"></script>

    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/aos.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="<?php echo e(url('public/plugins/frontend')); ?>/js/google-map.js"></script>
    <script src="<?php echo e(url('public/plugins/fronted-advokat')); ?>/js/main.js"></script>
</body>

</html><?php /**PATH /home/idaman.org/public_html/lawyer/resources/views/frontend-client/layouts/app-awal.blade.php ENDPATH**/ ?>