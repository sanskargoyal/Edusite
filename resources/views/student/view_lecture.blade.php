@extends('student.layout')
@section('page_title', 'View Lecture')
@section('lecture_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-play"></i> View Lecture</h2>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="card mt-5 shadow-sm">
	<div class="card-body">
		<h3><span class="text-uppercase text-success">{{$lecture->topic}}</span> - Lecture</h3>
		<div class="card-body">
			<video width="100%" controls>
			<source src="{{asset('storage/media/'.$lecture->lecture_video)}}" type="video/mp4">
		</video>
		</div>
		</div>
	</div>
	@endsection