<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm for Raven Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('plugins/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" type="text/css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('css/register/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-color: #ebeeef">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('images/skeleton.gif')}}" alt="iq">
				</div>
				@if (count($errors)>0)
                	@foreach ($errors->all() as $err)
                    <script type="text/javascript">
                    	alert('{{$err}}');
                    </script>
                	@endforeach
            	@endif
            	@if (session('thongbao'))
                	<div class="alert alert-success">
                    	{{ session('thongbao') }}
                	</div>
            	@endif
				<form action="{{ route('addUser') }}" method="POST">
					<h3>Đăng kí thành viên</h3>
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="form-group">
						<input type="text" placeholder="Họ" class="form-control" id="fisrt_name" name="first_name" required="">
						<input type="text" placeholder="Tên" class="form-control" id="last_name" name="last_name" required="">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Tên đăng nhập" class="form-control" name="user_name" id="user_name" required="">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email" class="form-control" name="email" id="email" required="">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="date" placeholder="Ngày sinh" class="form-control" name="birthday" id="birthday" required="">
						
					</div>
					<div class="form-wrapper">
						<select name="gender" id="gender" class="form-control">
							<option value="" disabled selected>Giới tính</option>
							<option value="male">Nam</option>
							<option value="female">Nữ</option>
							<option value="other">Khác</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Nhập mật khẩu" class="form-control" id="password" name="password" required="">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div id="thongbao-password"><p>&nbsp; </p></div>
					
					<div class="form-wrapper">
						<input type="password" placeholder="Xác nhận mật khẩu" id="re-password" name="password_confirmation" class="form-control" required="">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div id="thongbao-password_2"><p>&nbsp; </p></div>
					<button>Đăng kí
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script>
	$(document).ready(function (){

		$('#password').on('change',function (){
			//alert($(this).val());
			if($(this).val()!=''){
				$length=$(this).val().length;
				if($length<6){
					document.getElementById('thongbao-password').innerHTML='<p class="text-warning">Mật khẩu tối thiểu 6 ký tự</p>';
				}
				else{
					document.getElementById('thongbao-password').innerHTML='<p class="text-success">&nbsp;</p>';
				}
			}
			else{
				document.getElementById('thongbao-password').innerHTML='<p class="text-success">&nbsp;</p>';
			}
		});
		$('#re-password').on('change',function (){
			//alert($(this).val());
			if($(this).val()!=''){
				$password=$('#password').val();
				if($(this).val()!=$password){
					document.getElementById('thongbao-password_2').innerHTML='<p class="text-warning">2 password nhập phải giống nhau</p>';
				}
				else{
					document.getElementById('thongbao-password_2').innerHTML='<p class="text-success">&nbsp;</p>';
				}
			}else{
				document.getElementById('thongbao-password_2').innerHTML='<p class="text-success">&nbsp;</p>';
			}
		});
	});
</script>
</html>