@extends('student.layout')
@section('page_title', 'Student')
@section('student_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-user"></i> Students In My Class</h2>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="card mt-5 shadow-sm">
	<div class="card-body">
		@foreach($students as $stu)
		<div class="card mt-1 shadow-sm">
			<div class="card-body"><p class="font-weight-bold text-primary">{{$stu->fname}} {{$stu->lname}}</p>
				<p class="font-weight-bold">{{$stu->email}}</p>
				<p>{{$stu->gender}}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection