@extends('layout')
@section('PAGE_TITLE', 'About Us')
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
					<li>About Us</li>
				</ul>
				<h1 class="white-text">About Us</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<div id="blog" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div id="main" class="col-md-8">
				<div class="blog-post">
					<h1>About Us</h1>
					<p>Edusite is driven by our belief in the power of social change and transforming lives for the better. Edusite is the digital education platform launch to providing a wide range of educational resources and skills training in response to a desperate need from teachers and parents for good quality educational resources. All our resources are written by subject specialists at the top of their chosen field</p>

				</div>
			</div>
			<div class="col-md-4">
				<img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80" width="400px;">
			</div>
		</div><hr>
		<div class="row">
			<div class="col-md-4">
				<img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNsYXNzcm9vbXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="350px">
			</div>
			<div class="col-md-8">
				<div class="blog-post">
					<h1>Our Mission</h1>
					<p>To continue researching and developing dynamic educational resources and learning solutions for 21st century learning. Our distinctiveness comes from our ability to understand, acknowledge and address the needs of our users. We transform the lives of our learners by giving them opportunities to reach their full potential of an outstanding learning experience at the click of a button.</p>

				</div>
			</div>
		</div><hr>
		<div class="row">
			<div id="main" class="col-md-8">
				<div class="blog-post">
					<h1>Our Values</h1>
					<p>We are committed to the highest standards of professionalism and quality in all we do. We engage in continuous improvement in our work and we drive innovations in development and learning and value collaborative activities that facilitate discovery. Accomplishing our mission requires a positive and productive working environment.</p>

				</div>
			</div>
			<div class="col-md-4">
				<img src="https://images.unsplash.com/photo-1504863872862-a26e5582ba80?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNsYXNzcm9vbXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="400px" height="200px">
			</div>
		</div>
		
	</div>
	<!-- /main blog -->

</div>
<!-- row -->


</div>@endsection