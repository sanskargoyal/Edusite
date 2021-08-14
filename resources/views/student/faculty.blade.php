@extends('student.layout')
@section('page_title', 'Faculty')
@section('faculty_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-users"></i> My Department Faculty</h2>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="card mt-5 shadow-sm">
	<div class="card-body">
		@foreach($faculties as $fac)
		<div class="card mt-1 shadow-sm">
			<div class="card-body"><p class="font-weight-bold text-primary">{{$fac->fname}} {{$fac->lname}}</p>
				<p class="font-weight-bold">{{$fac->email}}</p>
				<p>{{$fac->gender}}</p>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection