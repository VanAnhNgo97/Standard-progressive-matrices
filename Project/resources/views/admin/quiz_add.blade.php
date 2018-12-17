@extends('layout/_shared')
@section('content')
	<!-- Home -->
	<!-- Course -->
	<div class="course">
		<div class="course_top"></div>
		<div class="container">
			<div class="panel_title">Time</div>
			<div class="panel_text">
				<div class="row">
				<form id="add_quiz" action="/admin/raven/quiz/add" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Category</label>
								<input type="text" name="category" id="category">
							</div>
							<div class="form-group">
								<label>Raven code</label>
								<input type="text" name="raven_code" id="raven_code">
							</div>
							<!-- <label for="quiz_image">Quiz:</label> -->
							<div class="form-group">
								<input type="file" name="quiz_image" id="quiz_image" 
									data-label="Quiz">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="file" name="answer_images[]" 
									multiple id="answer_images" data-label="Answers">
							</div>
							<div class="form-group">
								<label>Correct answer</label>
								<input type="number" name="correct_answer" id="correct_answer">
							</div>
						</div>

					<!-- <label for="answer_images">Answers</label> -->
					
					</div>
					<button type="submit" value="Add"></button>
				</form>
				</div>
			</div>
			
		</div>
	</div>
@endsection
@section('js_css')
<link rel="stylesheet" type="text/css" href="{{asset('css/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/course_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/filepicker/css/filepicker.default.css')}}">
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/filepicker/js/jquery.filepicker.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('js/course.js')}}"></script>
<script src="{{asset('js/admin/quiz.add.js')}}"></script>
@endsection