@extends('student.layout')
@section('page_title', 'Examination')
@section('exam_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-book"></i> Examination</h2>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif
<div class="card mt-5 shadow-sm">
	<div class="card-body">
		<div class="row col-md-12">
			<div class="col-md-6">
				<div class="row">
					<div class="card card-white shadow-sm">
						<div class="card-header">
							<h4 class="card-title">Examination Properties</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive project-stats">
								<table class="table">
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Exam Name</td>
										<td>{{$exam->exam_name}}</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Subject</td>
										<td>{{$subject->subject_name}}</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Start Date</td>
										<td>{{$exam->start_date}}</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>End Date</td>
										<td>{{$exam->deadline}}</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Start Duration</td>
										<td>{{$exam->start_time}} </td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>End Duration</td>
										<td>{{$exam->end_time}}</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Passmark</td>
										<td>{{$exam->pass_mark}}</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Questions</td>
										<td><b>{{$qn}}</b></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

		</div>
		<div class="col-md-6">
			<div class="card card-white shadow-sm">
				<div class="card-header">
					<h4 class="card-title">Terms and conditions</h4>
				</div>
				<div class="card-body">
					{{$exam->terms}}
				</div>
			</div>
			<div class="card card-white shadow-sm">
				<div class="card-header">
					<h3 class="card-title">Take Assessment</h3>
				</div>
				<div class="card-body">
					<input type="hidden" id="examID" value="" />
					<input type="hidden" id="hdfTestDuration" value="" />
					<div style="padding: 15px 0 13px 0px; " class="alert alert-info" id="time-text">
						<td>
							<span style="padding: 0px 10px; font-weight: bold; font-size:18px!important;">Exam Starts In :
							</span>
						</td>
						<td>
							<span class="timer-title time-started" style="font-size:18px;">00:00:00</span>
						</td>
					</div>
					<span id="timers"></span> 
				</div>
			</div>
			<div class="card card-white">
            <div class="card-header">
                <h3 class="card-title">Assessment History</h3>
            </div>
            <div class="card-body">
                

            </div>
        </div>
		</div>

	</div>
</div>
</div>
@endsection