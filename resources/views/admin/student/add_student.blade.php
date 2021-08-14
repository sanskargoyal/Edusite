@extends('admin.layout')
@section('page_title', 'Add Student')
@section('student_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-student"></i> Add Student</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/student')}}" class="btn btn-success shadow-sm">View Student</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card">
			<div class="card-body card-block">
				<form action="{{route('student.insert')}}" method="post" class="form-horizontal">
					@csrf
					<div class="form-group">
						<label for="fname" class=" form-control-label">First Name</label>
						<input type="text" id="fname" name="fname" placeholder="Enter First Name..." class="form-control" required="">
						@error('fname')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="lname" class=" form-control-label">Last Name</label>
						<input type="text" id="lname" name="lname" placeholder="Enter Last Name..." class="form-control" required="">
						@error('lname')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label>Male</label>&nbsp;<input type="radio" name="gender" value="Male" required>&nbsp;
						<label>Female</label>&nbsp;<input type="radio" name="gender" value="female" required>
					</div>
					<div class="form-group">
						<label for="email" class=" form-control-label">Email</label>
						<input type="email" id="email" name="email" placeholder="Enter Email..." class="form-control" required="">
						@error('email')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="phone" class=" form-control-label">Phone</label>
						<input type="text" id="phone" name="phone" placeholder="Enter Phone..." class="form-control" required="">
						@error('phone')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="dob" class=" form-control-label">DOB</label>
						<input type="date" id="dob" name="dob" placeholder="Enter DOB..." class="form-control" required="">
						@error('dob')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="department_id">Department Name</label>
						<select class="form-control" name="department_id">
							<option selected disabled>-Select Department Name-</option>
							@foreach($departments as $dept)
							<option value="{{$dept->id}}">{{$dept->department_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="branch_id">Branch Name</label>
						<select class="form-control" name="branch_id">
							<option selected disabled>-Select Branch Name-</option>
							@foreach($branches as $branch)
							<option value="{{$branch->id}}">{{$branch->branch_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="address" class=" form-control-label">Address</label>
						<textarea name="address" class="form-control" required placeholder="Enter Address" rows="4"></textarea>
						@error('address')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="card-footer">
					<button type="submit" name="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection