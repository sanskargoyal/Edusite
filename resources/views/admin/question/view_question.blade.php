@extends('admin.layout')
@section('page_title', 'View Question')
@section('question_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-question"></i> View Question</h2>
</div>
<div class="mt-3">
	<a href="{{url('admin/exam')}}" class="btn btn-success shadow-sm">Back</a>
</div>
@if(session('success'))
<div class="alert alert-danger mt-3" role="alert">{{session('success')}}</div>
@endif

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow">
			<div class="card-body">
				<h1 class="text-center">{{$exam->exam_name}} Exam</h1>
				@foreach($questions as $que)
					<div class="mt-4">
						<span class="font-weight-bold text-success">{{$que->id}}.</span><span class="text-danger"> {{$que->question}}</span>
						<p class="ml-4"><span class="font-weight-bold">a.</span> {{$que->opt1}}</p>
						<p class="ml-4"><span class="font-weight-bold">b.</span> {{$que->opt2}}</p>
						<p class="ml-4"><span class="font-weight-bold">c.</span> {{$que->opt3}}</p>
						<p class="ml-4"><span class="font-weight-bold">d.</span> {{$que->opt4}}</p>

						<a href="{{url('admin/question/edit_question/')}}/{{$que->id}}" class="btn btn-primary btn-sm mt-3"><i class="fas fa-edit text-light"></i></a>
						<a href="{{url('admin/question/delete_question/')}}/{{$que->id}}" class="btn btn-danger btn-sm mt-3"><i class="fas fa-trash text-light"></i></a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
</div>
@endsection