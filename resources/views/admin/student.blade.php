@extends('admin.layout')
@section('page_title', 'Student')
@section('student_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-user"></i> Student</h2>
</div>
<div class="mt-3">
	<a href="student/add_student" class="btn btn-success shadow-sm">Add Student</a>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow">
			<div class="card-body">
				<div class="table-responsive table-responsive-data2">
					<table class="table table-data2">
						<thead>
							<tr>
								<th>Student ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Added At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($students as $student)
							<tr>
								<td>{{$student->id}}</td>
								<td class="font-weight-bold">{{$student->fname}} {{$student->lname}}</td>
								<td>{{$student->email}}</td>
								<td>{{$student->created_at}}</td>
								<td>
								@if($student->status == 1)
								<a href="{{url('admin/student/status/0')}}/{{$student->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($student->status == 0)
								<a href="{{url('admin/student/status/1')}}/{{$student->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/student/edit_student/')}}/{{$student->id}}">Edit Student</a>
											<a class="dropdown-item" href="{{url('admin/student/view_student/')}}/{{$student->id}}">View Student</a>
											<a class="dropdown-item" href="{{url('admin/student/delete_student/')}}/{{$student->id}}">Delete Student</a>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- END DATA TABLE -->
			</div>
		</div>
	</div>
</div>
@endsection