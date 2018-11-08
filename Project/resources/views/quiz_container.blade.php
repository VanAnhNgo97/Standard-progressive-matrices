<div class="accordions" id="quiz_load">
	@foreach($quizzes as $quiz)				
		<div class="elements_accordions">

			<div class="accordion_container">
				<div class="accordion d-flex flex-row align-items-center active">
					<div>Quiz {{$quiz->raven_code}}</div>
				{{--	<form action="/raven/submit" method="post">
						@csrf
						<input type="text" name="quiz_id">
						<input type="text" name="answer_id">
						<input type="submit" name="Submit">
					</form> --}}
				</div>
				<div class="accordion_panel">
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
						<input type="hidden" id="_token" value="{{ csrf_token() }}">
						@foreach($quiz->answers as $answer)
						<div class="col-md-4">
							<div>
								<input type="radio" name="{{$quiz->id}}" 
									value="{{$answer->id}}" id="{{$answer->id}}">
							</div>
							<br>
							<img src="{{asset($answer->image_content)}}" class="img-fluid">
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</div>
	@endforeach
	{{ $quizzes->links() }}
</div>