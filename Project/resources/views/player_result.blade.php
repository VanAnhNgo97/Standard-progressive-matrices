@extends('layout/_shared')
@section('content')
	<div class="course_container courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center result_title">Kết quả của bạn</h2>
				</div>
			</div>
			<div class="row courses_row">

				<!-- Course -->
				@foreach($result as $player_result)
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_body">
							<div class="course_title score_container">
								Chỉ số IQ {{$player_result->iq_score}}
							</div>
							<div class="course_text">
								<p>Ngày thực hiện <span class="result">{{$player_result->created_at}}</span>
								<br>
								Số câu trả lời đúng <span class="result">{{$player_result->correct_answers}}</span>
								<br>
								Thời gian hoàn thành: <span class="result">{{$player_result->minute}}phút {{$player_result->second}}giây</span>
								<br>
								<span class="result">Bạn có trí tuệ {{$player_result->estimation}}</span>
								</p>
							</div>
						</div>
						<div class="course_footer d-flex flex-row align-items-center justify-content-start">
							<div class="course_students"><i class="fa fa-user" aria-hidden="true" ></i><span>10</span></div>
							<div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i><span>4,5</span></div>
						</div>
					</div>
				</div>
				@endforeach
				{{ $result->links() }}
			</div>
		</div>
	</div>
@endsection
@section('js_css')
@endsection