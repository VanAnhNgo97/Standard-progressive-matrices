@extends('layout/_shared')
@section('content')
	<div class="course">
		<div class="course_top"></div>
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Panels -->
				<div class="col-lg-9">
					
					<div class="tab_panels">

						<!-- Tabs -->
						<div class="course_tabs_container">
							<div class="container">
								<div class="row">
									<div class="col-lg-9">
										<div class="tabs d-flex flex-row align-items-center justify-content-start">
											<div class="tab active">Bắt đầu</div>
											<div class="tab"></div>
											<div class="tab"></div>
											<div class="tab"></div>
										</div>
									</div>
								</div>
							</div>		
						</div>

						<!-- Description -->
						<div class="tab_panel description active">
							<!-- FAQs -->
							<br>
							@if(count($quizzes) > 0)
							<div class="faqs" id="quiz_container">
								@include('quiz_container')

							</div>

							@endif
						</div>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>
						<div class="sidebar_top">
						{{--	<div class="countdown_container">
								<ul class="timer_list">
									<li><div id="minute" class="timer_num">00</div><div class="timer_ss">minutes</div></li>
									<li><div id="second" class="timer_num">00</div><div class="timer_ss">seconds</div></li>
								</ul>
							</div> --}}
						</div>
						<div class="sidebar_content">

							<!-- Features -->
							<div class="sidebar_section features">
								<div class="sidebar_title">Yêu cầu</div>
								<div class="features_content">
									<ul class="features_list">

										<!-- Feature -->
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Thời gian</span></div>
											<div class="feature_text ml-auto">60 phút</div>
										</li>

										<!-- Feature -->
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div class="feature_title"><i class="fa fa-bell" aria-hidden="true"></i><span>Số lượng câu hỏi</span></div>
											<div class="feature_text ml-auto">60</div>
										</li>
										<!-- Feature -->
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div class="feature_title"><i class="fa fa-thumbs-down" aria-hidden="true"></i><span>Max Retakes</span></div>
											<div class="feature_text ml-auto">5</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- You may like -->
							<div class="sidebar_section like">
								<div class="sidebar_title">Thời gian</div>
								<div class="like_items">
									<div class="countdown_container">
										<ul class="timer_list">
											<li><div id="minute" class="timer_num">00</div><div class="timer_ss">Phút</div></li>
											<li><div id="second" class="timer_num">00</div><div class="timer_ss">Giây</div></li>
										</ul>
									</div>
									<div class="text-center login_btn trans_200">
										<a  href="javascript:void(0)" 
											id="finish">Hoàn thành
										</a>
									</div>
									<!-- Like Item -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="iziModal" id="modal_result">
		<p>Thời gian hoàn thành: <span id="time_finish"></span></p>
		<p>Số câu trả lời đúng: <span id="raven_score"></span></p>
		<h6>Chỉ số IQ: <span id="iq_score"></span></h6>
		<p>Bạn có trí tuệ <span id="estimation"></span></p>
	</div>
@endsection
@section('js_css')
<link rel="stylesheet" type="text/css" href="{{asset('css/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/course_responsive.css')}}">
<link rel="stylesheet" type="text/css" 
	  href="{{asset('plugins/iziModal/css/iziModal.css')}}">
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/iziModal/js/iziModal.js')}}"></script>
<script src="{{asset('js/course.js')}}"></script>
<script src="{{asset('js/raven_test.js')}}"></script>
@endsection