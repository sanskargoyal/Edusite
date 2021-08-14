@extends('layout')
@section('PAGE_TITLE', 'Department Details')
@section('container')

<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(front_asset/./img/page-background.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<ul class="hero-area-tree">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('/department')}}">Department</a></li>
					<li>{{$department->department_name}}</li>
				</ul>
				<h1 class="white-text">{{$department->department_name}}</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">
	<div class="container">
		<h1 class="text-center">{{$department->department_name}}</h1>
		<p>{{$department->description}}</p>
		<div class="row" style="margin-top: 52px;">
			@foreach($branches as $branch)
			<div class="col-md-4" style="margin-top: 52px;">
				<div class="feature">
					<div class="feature-content">
						<h4><a href="{{url('branch_details/')}}/{{$branch->id}}">{{$branch->branch_name}}</a></h4>
						<p class="text-center">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- /Contact -->
@endsection