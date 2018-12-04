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
								<li class="active"><a href="index.html">Trang chủ</a></li>
								<li><a href="courses.html">Kiểm tra IQ</a></li>
								<li><a href="instructors.html">Bài báo IQ</a></li>
								<li><a href="#">Sự kiện</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact.html">Liên hệ</a></li>
							</ul>
						</nav>
						<?php if(auth()->guard()->guest()): ?>
						<div class="header_content_right ml-auto text-right" style="width:120px">
							<div class="login_btn trans_200">
								<a href="<?php echo e(route('raven.login')); ?>">Đăng nhập</a>
							</div>
						</div>
						<div class="header_content_right text-right register_container">
							<div class="login_btn trans_200">
								<a href="#">Đăng kí</a>
							</div>
						</div>
						<?php endif; ?>
						

							<!-- Hamburger -->
						<?php if(auth()->guard()->check()): ?>
						<div class="ml-auto">
							<b><?php echo e(Auth::user()->full_name); ?></b>
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
							      	<a href="<?php echo e(route('player.result')); ?>">					 Lịch sử test</a>
							      </li>
							      <li><a href="#">Tài khoản</a></li>
							      <li><a href="/raven/logout">Đăng xuất</a></li>
							    </ul>
						 	</div>
					 	</div>
						<?php endif; ?>
							

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
