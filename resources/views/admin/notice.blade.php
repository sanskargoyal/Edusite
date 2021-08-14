@extends('admin.layout')
@section('page_title', 'Notice')
@section('notice_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-list"></i> Notice</h2>
</div>
<div class="mt-3">
	<a href="notice/add_notice" class="btn btn-success shadow-sm">Add Notice</a>
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
								<th>Notice ID</th>
								<th>Title</th>
								<th>Description</th>
								<th>Post Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($notices as $notice)
							<tr>
								<td>{{$notice->id}}</td>
								<td class="font-weight-bold">{{$notice->title}}</td>
								<td class="font-weight-bold">{{$notice->description}}</td>
								<td>{{$notice->created_at}}</td>
								<td>
								@if($notice->status == 1)
								<a href="{{url('admin/notice/status/0')}}/{{$notice->id}}"><button class="btn btn-success mr-3" type="button">Active</button></a>
								@elseif($notice->status == 0)
								<a href="{{url('admin/notice/status/1')}}/{{$notice->id}}"><button class="btn btn-danger mr-3" type="button">Inactive</button></a>
								@endif
								</td>
								<td>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Select Action
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="{{url('admin/notice/delete_notice/')}}/{{$notice->id}}">Delete Notice</a>
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