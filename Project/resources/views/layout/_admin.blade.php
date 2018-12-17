<!DOCTYPE html>
<html lang="en">
<head>
<title>Test IQ</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Lingua project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" 
		href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" 
		href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>
<body>

<div class="super_container">
	{{-- Header --}}
	<!-- Header -->

<header class="header">
		
	<!-- Top Bar -->
	<div class="top_bar">
		<div class="top_bar_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_phone"><span class="top_bar_title">phone:</span>+44 300 303 0266</div>
							<div class="top_bar_right ml-auto">

								<!-- Language -->
								<div class="top_bar_lang">
									<span class="top_bar_title">site language:</span>
									<ul class="lang_list">
										<li class="hassubs">
											<a href="#">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul>
												<li><a href="#">Ukrainian</a></li>
												<li><a href="#">Japanese</a></li>
												<li><a href="#">Lithuanian</a></li>
												<li><a href="#">Swedish</a></li>
												<li><a href="#">Italian</a></li>
											</ul>
										</li>
									</ul>
								</div>

								<!-- Social -->
								<div class="top_bar_social">
									<span class="top_bar_title social_title">follow us</span>
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>

	<!-- Header Content -->
	<div class="header_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container mr-auto">
							<a href="#">
								<div class="logo_text">Lingua</div>
							</a>
						</div>
						<nav class="main_nav_contaner">
							<ul class="main_nav">
								<li class="active"><a href="{{route('admin.quiz.index')}}">Trang chủ</a></li>
								<li><a href="{{route('admin.result.index')}}">Kết quả đánh giá</a></li>
								<li><a href="instructors.html">Bài báo IQ</a></li>
								<li><a href="#">Sự kiện</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact.html">Liên hệ</a></li>
							</ul>
						</nav>
						@guest
						<div class="header_content_right ml-auto text-right" style="width:120px">
							<div class="login_btn trans_200">
								<a href="{{route('raven.login')}}">Đăng nhập</a>
							</div>
						</div>
						<div class="header_content_right text-right register_container">
							<div class="login_btn trans_200">
								<a href="{{route('raven.register')}}">Đăng kí</a>
							</div>
						</div>
						@endguest
						{{--	<div class="header_search">
								<div class="search_form_container">
									<form action="#" id="search_form" class="search_form trans_400">
										<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
										<div class="search_button">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</form>
								</div>
							</div> --}}

							<!-- Hamburger -->
						@auth
						<div class="ml-auto">
							<b>{{Auth::user()->full_name}}</b>
						</div>
						<div class="text-right">
							<div class="dropdown">
							    <div class="dropdown-toggle" data-toggle="dropdown">
							    	<div class="user">	
							    		<a href="#">
							    			<i class="fa fa-user" aria-hidden="true"></i>
							    		</a>
							    	</div>
							    	<span class="caret"></span>
							    </div>
							    <ul class="dropdown-menu">
							      <li>
							      	<a href="{{route('player.result')}}">					 Lịch sử test</a>
							      </li>
							      <li><a href="#">Tài khoản</a></li>
							      <li><a href="/raven/logout">Đăng xuất</a></li>
							    </ul>
						 	</div>
					 	</div>
						@endauth
							

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<div class="search">
		<form action="#" class="header_search_form menu_mm">
			<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
			<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
				<i class="fa fa-search menu_mm" aria-hidden="true"></i>
			</button>
		</form>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
			<li class="menu_mm"><a href="index.html">Home</a></li>
			<li class="menu_mm"><a href="courses.html">Courses</a></li>
			<li class="menu_mm"><a href="instructors.html">Instructors</a></li>
			<li class="menu_mm"><a href="#">Events</a></li>
			<li class="menu_mm"><a href="blog.html">Blog</a></li>
			<li class="menu_mm"><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
	<div class="menu_extra">
		<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
		<div class="menu_social">
			<span class="menu_title">follow us</span>
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>
	{{--Content--}}
	@yield('content')
	{{-- Footer --}}
	@include('layout.footer')
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
	@yield('js_css')
</body>
</html>