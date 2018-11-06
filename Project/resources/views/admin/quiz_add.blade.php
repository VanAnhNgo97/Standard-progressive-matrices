@extends('layout/_shared')
@section('content')
	<!-- Home -->

	

	<!-- Intro -->



	<!-- Course -->

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
									<div class="col-lg-12">
										<div class="tabs d-flex flex-row align-items-center justify-content-start">
											<div class="tab active">description</div>
											<div class="tab">curriculum</div>
											<div class="tab">reviews</div>
											<div class="tab">members</div>
										</div>
									</div>
								</div>
							</div>		
						</div>

						<!-- Description -->
						<div class="tab_panel description active">
							<div class="panel_title">Time</div>
							<div class="panel_text">
								<form id="add_quiz" action="/admin/quiz/add" method="POST" enctype="multipart/form-data">
									@csrf
									<label>Category</label>
									<input type="text" name="category" id="category"><br>
									<label>Raven code</label>
									<input type="text" name="raven_code" id="raven_code"><br>
									<label for="quiz_image">Quiz:</label>
									<input type="file" name="quiz_image" id="quiz_image" hidden="true"><br>
									<label for="answer_images">Answers</label>
									<input type="file" name="answer_images[]" 
											multiple id="answer_images" hidden>
									<br>
									<label>Correct answer</label>
									<input type="number" name="correct_answer" id="correct_answer"><br>
									<input type="submit" value="Add">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('js_css')
<link rel="stylesheet" type="text/css" href="{{asset('css/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/course_responsive.css')}}">
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('js/course.js')}}"></script>
<script src="{{asset('js/admin/quiz.add.js')}}"></script>
@endsection