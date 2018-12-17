@extends('layout/_admin')
@section('content')
	<div class="course_container courses">
		<div class="courses_background"></div>
		<div class="container">
		@foreach($quizzes as $quiz)
			<div class="row">
				<div class="col-md-6">
					<h2 class="section_title text-center result_title">Câu hỏi {{$quiz->raven_code}}</h2>
				</div>
			</div>
			<div class="row courses_row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-3">
						</div>
						<div class="col-md-6">
							<img src="{{asset($quiz->image_content)}}" class="img-fluid">
						</div>
						<div class="col-md-3">
						</div>
					</div>
					<div class="row">
						@foreach($quiz->answers as $answer)
						<div class="col-md-4">
							<img src="{{asset($answer->image_content)}}" class="img-fluid">
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-md-4">
					<!-- <div class="row"> -->
						<img src = "{{asset('images/blog_12.jpg')}}" alt="IQ" class="img-fluid">
					<!-- </div>
					<div class="row"> -->
						<img src = "{{asset('images/blog_10.jpg')}}" alt="IQ" class="img-fluid">
					<!--  -->
				</div>
			</div>
		@endforeach
		{{ $quizzes->links() }}
		</div>
	</div>
@endsection
