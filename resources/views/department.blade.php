@extends('layout')
@section('PAGE_TITLE', 'Department')
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
					<li>Department</li>
				</ul>
				<h1 class="white-text">Department</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">
	<div class="container">
		<h1 class="text-center">Department</h1>
		<div class="row" style="margin-top: 52px;">
			@foreach($departments as $dept)
			<div class="col-md-4" style="margin-top: 52px;">
				<div class="feature">
					<div class="feature-content">
						<h4><a href="{{url('department_details/')}}/{{$dept->id}}">{{$dept->department_name}}</a></h4>
						<p>{{Str::limit($dept->description, 100, $end='.......')}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- /Contact -->
@endsection