<!DOCTYPE html>
<html lang="en">
<head>
<title>Test IQ</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap4/bootstrap.min.css')); ?>">
<link href="<?php echo e(asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" 
		href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
<link rel="stylesheet" type="text/css" 
		href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsive.css')); ?>">
</head>
<body>

<div class="super_container">
	
	<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo $__env->yieldContent('content'); ?>
	
	<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/bootstrap4/popper.js')); ?>"></script>
<script src="<?php echo e(asset('css/bootstrap4/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/easing/easing.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
	<?php echo $__env->yieldContent('js_css'); ?>
</body>
</html>