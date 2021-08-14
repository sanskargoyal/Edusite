@extends('student.layout')
@section('page_title', 'Examination')
@section('exam_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-book"></i> My Examination</h2>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="card mt-5 shadow-sm">
	<div class="card-body">
		<div class="table-responsive table-responsive-data2">
					<table class="table table-data2">
						<thead>
							<tr>
								<th>Name</th>
								<th>Subject</th>
								<th>Start Date</th>
								<th>End Date </th>
								<th>Start Time</th>
								<th>End Time </th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($exams as $exam)
							<tr>
								<td class="font-weight-bold">{{$exam->exam_name}}</td>
								<td>{{$exam->subject_id}}</td>
								<td>{{$exam->start_date}}</td>
								<td>{{$exam->deadline}}</td>
								<td>{{$exam->start_time}}</td>
								<td>{{$exam->end_time}}</td>
								<td>
								@if($exam->status == 1)
								<span class="text-success font-weight-bold">Active</span>
								@elseif($exam->status == 0)
								<span class="text-success font-weight-bold">Inactive</span>
								@endif
								</td>
								<td><a href="{{url('student/take_exam/')}}/{{$exam->id}}" class="btn btn-sm btn-primary text-light">Take Exam</a></td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
	</div>
</div>
@endsection