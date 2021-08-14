@extends('admin.layout')
@section('page_title', 'Examination')
@section('exam_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-book"></i> Exam</h2>
</div>
<div class="mt-3">
	<a href="exam/add_exam" class="btn btn-success shadow-sm">Add Exam</a>
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
							<tr><th>ID</th>
								<th>Exam</th>
								<th>Department ID</th>
								<th>Start Date</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($exams as $exam)
							<tr>
								<td>{{$exam->id}}</td>
								<td class="font-weight-bold">{{$exam->exam_name}}</td>
								<td>{{$exam->department_id}}</td>
								<td>{{$exam->start_date}}</td>
								<td>{{$exam->start_time}}</td>
								<td>{{$exam->end_time}}</td>
								<td>
								@if($exam->status == 1)
								<a href="{{url('admin/exam/status/0')}}/{{$exam->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($exam->status == 0)
								<a href="{{url('admin/exam/status/1')}}/{{$exam->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/exam/edit_exam/')}}/{{$exam->id}}">Edit Exam</a>
											<a class="dropdown-item" href="{{url('admin/question/view_question/')}}/{{$exam->id}}">View Question</a>
											<a class="dropdown-item" href="{{url('admin/question')}}">Add Question</a>
											<a class="dropdown-item" href="{{url('admin/exam/delete_exam/')}}/{{$exam->id}}">Delete Exam</a>
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