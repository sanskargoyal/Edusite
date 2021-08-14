@extends('admin.layout')
@section('page_title', 'Add Department')
@section('department_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-file"></i> Add Department</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/department')}}" class="btn btn-success shadow-sm">View Department</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{route('department.insert')}}" method="post" class="form-horizontal">
					@csrf
					<div class="form-group">
						<label for="department_name" class=" form-control-label">Department Name</label>
						<input type="text" id="department_name" name="department_name" placeholder="Enter Department Name..." class="form-control" required="">
						@error('department_name')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="description" class=" form-control-label">Description</label>
						<textarea rows="4" id="description" name="description" placeholder="Enter Description..." class="form-control" required=""></textarea>
						@error('description')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	@endsection