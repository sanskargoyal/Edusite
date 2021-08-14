@extends('admin.layout')
@section('page_title', 'View Student')
@section('student_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-user"></i> View Student</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/student')}}" class="btn btn-success shadow-sm">Student</a>
</div>

<div class="card mt-3">
	<div class="card-body card-block">
		<div class="row">
			<div class="col-md-8">
				<table class="table">
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Student ID</td>
							<td><b>{{$student->id}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">2</th>
							<td>Department ID</td>
							<td><b>{{$student->department_id}}</b></td> 
						</tr>  
						<tr>
							<th scope="row">3</th>
							<td>Branch ID</td>
							<td><b>{{$student->branch_id}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">4</th>
							<td>First Name</td>
							<td><b>{{$student->fname}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">5</th>
							<td>Last Name</td>
							<td><b>{{$student->lname}}</b></td> 
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Date Of Birth</td>
							<td><b>{{$student->dob}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">6</th>
							<td>gender</td>
							<td><b>{{$student->gender}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">7</th>
							<td>Email</td>
							<td><b>{{$student->email}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">8</th>
							<td>Phone</td>
							<td><b>{{$student->phone}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">9</th>
							<td>Address</td>
							<td><b>{{$student->address}}</b></td> 
						</tr> 
						<tr>
							<th scope="row">12</th>
							<td>Status</td>
							@if($student->status==1)
							<td><b>Active</b></td> 
							@elseif($student->status==0)
							<td><b>Inactive</b></td> 
							@endif
						</tr>
						<tr>
							<th scope="row">12</th>
							<td>Added At</td>
							<td><b>{{$student->created_at}}</b></td> 
						</tr> 
					</tbody>
				</table>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
@endsection