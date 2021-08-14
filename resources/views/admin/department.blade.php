@extends('admin.layout')
@section('page_title', 'Department')
@section('department_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-file"></i> Department</h2>
</div>
<div class="mt-3">
	<a href="department/add_department" class="btn btn-success shadow-sm">Add Department</a>
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
								<th>Department ID</th>
								<th>Department Name</th>
								<th>Department Created At</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($departments as $department)
							<tr>
								<td>{{$department->id}}</td>
								<td class="font-weight-bold">{{$department->department_name}}</td>
								<td>{{$department->created_at}}</td>
								<td>
								@if($department->status == 1)
								<a href="{{url('admin/department/status/0')}}/{{$department->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($department->status == 0)
								<a href="{{url('admin/department/status/1')}}/{{$department->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/department/delete_department/')}}/{{$department->id}}">Delete Department</a>
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