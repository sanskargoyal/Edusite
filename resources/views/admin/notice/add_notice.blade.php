@extends('admin.layout')
@section('page_title', 'Add Notice')
@section('notice_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-list"></i> Add Notice</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/notice')}}" class="btn btn-success shadow-sm">View Notice</a>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{route('notice.insert')}}" method="post" class="form-horizontal">
					@csrf
					<div class="form-group">
						<label for="title" class=" form-control-label">Title</label>
						<input type="text" id="title" name="title" placeholder="Enter Notice Title..." class="form-control" required="">
						@error('title')
						<span class="help-block text-danger">{{$message}}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="description" class=" form-control-label">Description</label>
						<textarea rows="5" id="description" name="description" placeholder="Enter Notice Description..." class="form-control" required=""></textarea>
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