@extends('admin.layout')
@section('page_title', 'Dashboard')
@section('dashboard_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-tachometer-alt"></i> Dashboard</h2>
</div>

<div class="row mt-5">
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c1">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="zmdi zmdi-file-text"></i>
					</div>
					<div class="text">
						<h2>{{$td}}</h2>
						<span>Department</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c2">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="zmdi zmdi-account-o"></i>
					</div>
					<div class="text">
						<h2>{{$ts}}</h2>
						<span>Students</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c3">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-book"></i>
					</div>
					<div class="text">
						<h2>{{$te}}</h2>
						<span>Examination</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c4">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-folder"></i>
					</div>
					<div class="text">
						<h2>{{$tsu}}</h2>
						<span>Subjects</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c2">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-tags fa-s"></i>
					</div>
					<div class="text">
						<h2>{{$tb}}</h2>
						<span>Branch</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c1">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-list"></i>
					</div>
					<div class="text">
						<h2>{{$tn}}</h2>
						<span>Notice</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c4">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-question"></i>
					</div>
					<div class="text">
						<h2>{{$tq}}</h2>
						<span>Questions</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="overview-item overview-item--c3">
			<div class="overview__inner">
				<div class="overview-box clearfix pb-3">
					<div class="icon">
						<i class="fas fa-book"></i>
					</div>
					<div class="text">
						<h2>{{$tf}}</h2>
						<span>Faculties</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection