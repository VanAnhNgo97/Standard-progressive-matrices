@extends('layout/_shared')
@section('content')
	<div class="course_container courses">
		<div class="courses_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="section_title text-center result_title">Kết quả</h2>
				</div>
			</div>

				<!-- Course -->
			<div class="card mb-3">
            <div class="card-header"><b>Result</b>
            	<a href ="{{ route('export') }}" class="btn btn-info export" id="export-button"> Export file Excel </a>
            </div>

	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                      <th>Name</th>
	                      <th>IQ Score</th>
	                      <th>Ngày thực hiện</th>
	                      <th>Thời gian</th>
	                    </tr>
	                  </thead>
	                  <tfoot>
	                    <tr>
	                      <th>Name</th>
	                      <th>IQ Score</th>
	                      <th>Ngày thực hiện</th>
	                      <th>Thời gian</th>
	                    </tr>
	                  </tfoot>
	                  <tbody>
	                    @foreach($result_list as $player_result)
						<tr>
	                      <td>{{$player_result->player->full_name}}</td>
	                      <td>{{$player_result->iq_score}}</td>
	                      <td>{{$player_result->created_at}}</td>
	                      <td>{{$player_result->minute}}phút {{$player_result->second}}giây</td>
	                    </tr>
						@endforeach
						{{ $result_list->links() }}
	                  </tbody>
	                </table>
	            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	        </div>
		</div>
	</div>
@endsection
