@extends('layout')
@section('PAGE_TITLE', 'Edusite')
@section('container')
<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(https://images.pexels.com/photos/5212337/pexels-photo-5212337.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)"></div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="white-text">Edusite Free Online Classroom</h1>
					<p class="lead white-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /Home -->

<!-- About -->
<div id="about" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">
				<div class="section-header">
					<h2>Welcome to Edusite</h2>
					<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>

				<!-- feature -->
				<div class="feature">
					<i class="feature-icon fa fa-flask"></i>
					<div class="feature-content">
						<h4>Online Courses </h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
				<!-- /feature -->

				<!-- feature -->
				<div class="feature">
					<i class="feature-icon fa fa-users"></i>
					<div class="feature-content">
						<h4>Expert Teachers</h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
				<!-- /feature -->

				<!-- feature -->
				<div class="feature">
					<i class="feature-icon fa fa-comments"></i>
					<div class="feature-content">
						<h4>Community</h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
				<!-- /feature -->

			</div>

			<div class="col-md-6">
				<div class="about-img">
					<img src="https://images.pexels.com/photos/3401403/pexels-photo-3401403.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" height="500px">
				</div>
			</div>

		</div>
		<!-- row -->

	</div>
	<!-- container -->
</div>
<!-- /About -->

<!-- Departement -->
<div id="courses" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<h2>Explore Department</h2>
				<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
			</div>
		</div>
		<!-- /row -->

		<!-- Department -->
		<div class="row">
			@foreach($departments as $dept)
			<div class="col-md-3">
				<div class="feature">
					<div class="feature-content">
						<h4><a href="{{url('department_details/')}}/{{$dept->id}}">{{$dept->department_name}}</a></h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<!-- /Department -->

		<div class="row">
			<div class="center-btn">
				<a class="main-button icon-button" href="{{url('/department')}}">More department</a>
			</div>
		</div>

	</div>
	<!-- container -->

</div>
<!-- /Department -->

<!-- Why us -->
<div id="why-us" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<h2>Why Edusite</h2>
				<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
			</div>

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa fa-flask"></i>
					<div class="feature-content">
						<h4>Online Courses</h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa fa-users"></i>
					<div class="feature-content">
						<h4>Expert Teachers</h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

			<!-- feature -->
			<div class="col-md-4">
				<div class="feature">
					<i class="feature-icon fa fa-comments"></i>
					<div class="feature-content">
						<h4>Community</h4>
						<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
					</div>
				</div>
			</div>
			<!-- /feature -->

		</div>
		<!-- /row -->

		<hr class="section-hr">

	</div>
	<!-- /container -->

</div>
<!-- /Why us -->

<!-- Contact CTA -->
<div id="contact-cta" class="section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(front_asset/./img/cta2-background.jpg)"></div>
	<!-- Backgound Image -->

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-8 col-md-offset-2 text-center">
				<h2 class="white-text">Contact Us</h2>
				<p class="lead white-text">Get In Touch.</p>
				<a class="main-button icon-button" href="{{url('/contact')}}">Contact Us Now</a>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Contact CTA -->

<div class="container" style="margin-top:150px;">
	<div class="row">
		<div class="col-md-6">
			<h3 class="text-center">Upcoming Exam</h3>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						@foreach($exams as $exam)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading1">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$exam->id}}" aria-expanded="false" aria-controls="{{$exam->id}}">
										{{$exam->exam_name}}
									</a>
								</h4>
							</div>
							<div id="{{$exam->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
								<div class="panel-body">
									Start Date - {{$exam->start_date}}<br>
									End Date - {{$exam->deadline}}<br>
									Start Time - {{$exam->start_time}}<br>
									End Time - {{$exam->end_time}}<br>
									Passing Marks - {{$exam->pass_mark}}<br>
									<hr><i class="fa fa-calendar"></i> {{$exam->start_date}}
									 | <i class="fa fa-refresh"></i> {{$exam->deadline}}
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="border-left: 0.5px dashed #333;">
			<h3 class="text-center">Notice</h3>
			<div class="panel panel-white">
				<div class="panel-body">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						@foreach($notices as $notice)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading1">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$notice->id}}" aria-expanded="false" aria-controls="{{$notice->id}}">
										{{$notice->title}}
									</a>
								</h4>
							</div>
							<div id="{{$notice->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
								<div class="panel-body">
									{{$notice->description}}
									<hr><i class="fa fa-calendar"></i> {{$notice->created_at}} | <i class="fa fa-refresh"></i> {{$notice->updated_at}}
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection