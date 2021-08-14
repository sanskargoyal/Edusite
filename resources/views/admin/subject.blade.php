@extends('admin.layout')
@section('page_title', 'Subject')
@section('subject_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-folder"></i> subject</h2>
</div>
<div class="mt-3">
	<a href="subject/add_subject" class="btn btn-success shadow-sm">Add Subject</a>
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
								<th>Subject ID</th>
								<th>Subject Name</th>
								<th>Department ID</th>
								<th>Branch ID</th>
								<th>Added At</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subjects as $subject)
							<tr>
								<td>{{$subject->id}}</td>
								<td class="font-weight-bold">{{$subject->subject_name}}</td>
								<td>{{$subject->department_id}}</td>
								<td>{{$subject->branch_id}}</td>
								<td>{{$subject->created_at}}</td>
								<td>
								@if($subject->status == 1)
								<a href="{{url('admin/subject/status/0')}}/{{$subject->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($subject->status == 0)
								<a href="{{url('admin/subject/status/1')}}/{{$subject->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/subject/delete_subject/')}}/{{$subject->id}}">Delete Subject</a>
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