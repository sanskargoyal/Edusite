@extends('admin.layout')
@section('page_title', 'Edit Exam')
@section('exam_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-book"></i> Edit Exam</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/exam')}}" class="btn btn-success shadow-sm">View Exam</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{url('admin/exam/update_exam/')}}/{{$exam->id}}" method="post" class="form-horizontal">
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
							@foreach($subjects as $sub)
							<option value="{{$sub->id}}">{{$sub->subject_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="exam_name" class=" form-control-label">Exam Name</label>
						<input type="text" id="exam_name" name="exam_name" placeholder="Enter Exam Name..." class="form-control" required="" value="{{$exam->exam_name}}">
					</div>
					<div class="form-group">
						<label for="start_date" class=" form-control-label">Start Date</label>
						<input type="date" id="start_date" name="start_date" placeholder="Enter Start Date..." class="form-control" required="" value="{{$exam->start_date}}">
					</div>
					<div class="form-group">
						<label for="deadline" class=" form-control-label">Deadline</label>
						<input type="date" id="deadline" name="deadline" placeholder="Enter Deadline..." class="form-control" required="" value="{{$exam->deadline}}">
					</div>
					<div class="form-group">
						<label for="start_time" class=" form-control-label">Start Time</label>
						<input type="time" id="start_time" name="start_time" placeholder="Enter Start Time..." class="form-control" required="" value="{{$exam->start_time}}">
					</div>
					<div class="form-group">
						<label for="end_time" class=" form-control-label">End time</label>
						<input type="time" id="end_time" name="end_time" placeholder="Enter End time..." class="form-control" required="" value="{{$exam->end_time}}">
					</div>
					<div class="form-group">
						<label for="pass_mark" class=" form-control-label">Pass Marks</label>
						<input type="text" id="pass_mark" name="pass_mark" placeholder="Enter Pass Marks..." class="form-control" required="" value="{{$exam->pass_mark}}">
					</div>
					<div class="form-group">
						<label for="re_exam" class=" form-control-label">RE Exam(if you take exam then show it again after some days)</label>
						<input type="text" id="re_exam" name="re_exam" placeholder="Enter End time..." class="form-control" required="" value="{{$exam->re_exam}}">
					</div>
					<div class="form-group">
						<label for="terms" class=" form-control-label">Terms & Conditions</label>
						<textarea id="terms" name="terms" placeholder="Enter Terms & Conditions..." class="form-control" required="" rows="4">{{$exam->terms}}</textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary btn-sm">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	@endsection