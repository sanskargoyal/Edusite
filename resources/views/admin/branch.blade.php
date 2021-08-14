@extends('admin.layout')
@section('page_title', 'Branch')
@section('branch_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-tags"></i> Branch</h2>
</div>
<div class="mt-3">
	<a href="branch/add_branch" class="btn btn-success shadow-sm">Add Branch</a>
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
								<th>Branch ID</th>
								<th>Department ID</th>
								<th>Branch Name</th>
								<th>Branch Created At</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($branches as $branch)
							<tr>
								<td>{{$branch->id}}</td>
								<td>{{$branch->department_id}}</td>
								<td class="font-weight-bold">{{$branch->branch_name}}</td>
								<td>{{$branch->created_at}}</td>
								<td>
								@if($branch->status == 1)
								<a href="{{url('admin/branch/status/0')}}/{{$branch->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($branch->status == 0)
								<a href="{{url('admin/branch/status/1')}}/{{$branch->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/branch/delete_branch/')}}/{{$branch->id}}">Delete Department</a>
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