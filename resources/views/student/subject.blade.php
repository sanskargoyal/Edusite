@extends('student.layout')
@section('page_title', 'Student')
@section('student_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-folder"></i> My Subject</h2>
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
								<th>Added At</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subjects as $subject)
							<tr>
								<td class="font-weight-bold">{{$subject->subject_name}}</td>
								<td>{{$subject->department_id}}</td>
								<td>{{$subject->branch_id}}</td>
								<td>{{$subject->created_at}}</td>
								<td>
								@if($subject->status == 1)
								<span class="text-success font-weight-bold">Active</span>
								@elseif($subject->status == 0)
								<span class="text-success font-weight-bold">Inactive</span>
								@endif
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
	</div>
</div>
@endsection