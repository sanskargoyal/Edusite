@extends('admin.layout')
@section('page_title', 'Faculty')
@section('faculty_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-users"></i> Faculty</h2>
</div>
<div class="mt-3">
	<a href="faculty/add_faculty" class="btn btn-success shadow-sm">Add Faculty</a>
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
								<th>Faculty ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Added At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($faculties as $faculty)
							<tr>
								<td>{{$faculty->id}}</td>
								<td class="font-weight-bold">{{$faculty->fname}} {{$faculty->lname}}</td>
								<td>{{$faculty->email}}</td>
								<td>{{$faculty->created_at}}</td>
								<td>
								@if($faculty->status == 1)
								<a href="{{url('admin/faculty/status/0')}}/{{$faculty->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($faculty->status == 0)
								<a href="{{url('admin/faculty/status/1')}}/{{$faculty->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/faculty/edit_faculty/')}}/{{$faculty->id}}">Edit faculty</a>
											<a class="dropdown-item" href="{{url('admin/faculty/view_faculty/')}}/{{$faculty->id}}">View faculty</a>
											<a class="dropdown-item" href="{{url('admin/faculty/delete_faculty/')}}/{{$faculty->id}}">Delete faculty</a>
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