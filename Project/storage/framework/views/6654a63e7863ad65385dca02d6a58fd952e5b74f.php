<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap4/bootstrap.min.css')); ?>">
	<!--font-awesome-->
	<link href="<?php echo e(asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
	<!--login css-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login/main.css')); ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo e(asset('images/bg-01.jpg')); ?>);">
					<span class="login100-form-title-1">
						Đăng nhập
					</span>
				</div>

				<form class="login100-form validate-form" 
							method="POST" action="<?php echo e(route('raven.login')); ?>">
					<?php echo csrf_field(); ?>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Vui lòng điền nhập tài khoản">
						<span class="label-input100">Tài khoản</span>
						<input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Vui lòng nhập mật khẩu">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ghi nhớ
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Quên mật khẩu?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Đăng nhập
						</button>
					</div>
					<?php if($errors->any()): ?>
				    <div class="alert alert-danger">
				        <ul>
				            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <li><?php echo e($error); ?></li>
				            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				        </ul>
				    </div>
				<?php endif; ?>
				</form>

			</div>
		</div>
	</div>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('css/bootstrap4/popper.js')); ?>"></script>
<script src="<?php echo e(asset('css/bootstrap4/bootstrap.min.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('js/login.js')); ?>"></script> -->
</body>
</html>