@extends('layout/_admin')
@section('content')
	<div class="course_container courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center result_title">Bộ trắc nghiệm RAVEN</h2>
				</div>
				
			</div>
			<div class="row courses_row">

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Bộ A</th>
							<th>Bộ B</th>
							<th>Bộ C</th>
							<th>Bộ D</th>
							<th>Bộ E</th>
						</tr>
					</thead>
					<tbody>
						@php
							$i = 0;
							$length = count($quizzes["A"]);
						@endphp
						@for($i = 0; $i < $length; $i++)
						<tr>
							<td>{{$i}}</td>
							<td>
								<a href="{{route('admin.quiz.detail', 
												['page' => ($i+1)])}}">
									{{$quizzes['A'][$i]['raven_code']}}
								</a>
							</td>
							<td>
								<a href="{{route('admin.quiz.detail', 
												['page' => (($i+13))])}}">
									{{$quizzes['B'][$i]['raven_code']}}
								</a>
							</td>
							<td>
								<a href="{{route('admin.quiz.detail', 
													['page' => (($i+25))
													])}}">
									{{$quizzes['C'][$i]['raven_code']}}
								</a>
							</td>
							<td>
								<a href="{{route('admin.quiz.detail', 
												['page' => (($i+37))])}}">
									{{$quizzes['D'][$i]['raven_code']}}
								</a>
							</td>
							<td>
								<a href="{{route('admin.quiz.detail', 
												['page' => (($i+49))])}}">
									{{$quizzes['E'][$i]['raven_code']}}
								</a>
							</td>
						</tr>
						@endfor
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
@endsection
