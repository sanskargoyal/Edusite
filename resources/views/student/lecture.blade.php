@extends('student.layout')
@section('page_title', 'Lecture')
@section('lecture_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-play"></i> My Lecture</h2>
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
								<th>Subject Name</th>
								<th>Department ID</th>
								<th>Branch ID</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($lectures as $lecture)
							<tr>
								<td class="font-weight-bold">{{$lecture->topic}}</td>
								<td>{{$lecture->department_id}}</td>
								<td>{{$lecture->branch_id}}</td>
								<td>
								@if($lecture->status == 1)
								<span class="text-success font-weight-bold">Active</span>
								@elseif($lecture->status == 0)
								<span class="text-success font-weight-bold">Inactive</span>
								@endif
								</td>
								<td><a href="{{url('student/view_lecture/')}}/{{$lecture->subject_id}}" class="btn btn-sm btn-primary text-light">Play List</a></td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
	</div>
</div>
@endsection