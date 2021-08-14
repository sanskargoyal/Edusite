@extends('admin.layout')
@section('page_title', 'Add Branch')
@section('branch_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-tags"></i> Add Branch</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/branch')}}" class="btn btn-success shadow-sm">View Branch</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{route('branch.insert')}}" method="post" class="form-horizontal">
					@csrf
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
						<label for="branch_name" class=" form-control-label">Branch Name</label>
						<input type="text" id="branch_name" name="branch_name" placeholder="Enter Branch Name..." class="form-control" required="">
						@error('branch_name')
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