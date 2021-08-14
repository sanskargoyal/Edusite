@extends('layout')
@section('PAGE_TITLE', 'Branch Details')
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
					<li>{{$branch->branch_name}}</li>
				</ul>
				<h1 class="white-text">{{$branch->branch_name}}</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">
	<div class="container">
		<h1 class="text-center">{{$branch->branch_name}}</h1>
		<p class="text-center">{{$branch->description}}</p>
		<div class="row" style="margin-top: 52px;">
			<h2>Subjects</h2><hr>
			@foreach($subjects as $sub)
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-6 d-inline">
					<h4>{{$sub->subject_name}}</h4>
				</div>
				<div class="col-md-6">
					<div class="center-btn">
						<a class="main-button icon-button" href="{{url('/subject_details/')}}/{{$sub->id}}">View Details</a>
					</div>
				</div>
			</div>
			@endforeach
			<h2 style="margin-top: 50px;">Faculty</h2><hr>
			@foreach($faculties as $faculty)
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-6 d-inline">
					<h4>{{$faculty->fname}} {{$faculty->lname}}</h4>
				</div>
				<div class="col-md-6">
					<div class="center-btn">
						<a class="main-button icon-button" href="{{url('/faculty_details/')}}/{{$faculty->id}}">View Details</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- /Contact -->
@endsection