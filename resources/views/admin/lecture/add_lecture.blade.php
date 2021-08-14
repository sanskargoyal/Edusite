@extends('admin.layout')
@section('page_title', 'Add Lecture')
@section('lecture_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-play"></i> Add Lecture</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/lecture')}}" class="btn btn-success shadow-sm">View Lecture</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{route('lecture.insert')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
						<label for="branch_id">Branch Name</label>
						<select class="form-control" name="branch_id">
							<option selected disabled>-Select Branch Name-</option>
							@foreach($branches as $branch)
							<option value="{{$branch->id}}">{{$branch->branch_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="subject_id">Subject Name</label>
						<select class="form-control" name="subject_id">
							<option selected disabled>-Select Subject Name-</option>
							@foreach($subjects as $subject)
							<option value="{{$subject->id}}">{{$subject->subject_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="topic" class=" form-control-label">Lecture Topic</label>
						<textarea id="topic" name="topic" placeholder="Enter Lecture Topic..." class="form-control" required="" rows="2"></textarea>
					</div>
					<div class="form-group">
						<label for="lecture_video" class=" form-control-label">Lecture Video</label>
						<input type="file" id="lecture_video" name="lecture_video" placeholder="Enter Lecture Video..." class="form-control" required="">
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	@endsection