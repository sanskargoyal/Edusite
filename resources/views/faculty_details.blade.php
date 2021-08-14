@extends('layout')
@section('PAGE_TITLE', 'Faculty Details')
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
					<li>
						@if($faculty->gender=="Male")
						Mr. {{$faculty->fname}} {{$faculty->lname}}
						@elseif($faculty->gender=="Female")
						Mrs. {{$faculty->fname}} {{$faculty->lname}}
						@endif
					</li>
				</ul>
				<h1 class="white-text">
					@if($faculty->gender=="Male")
					Mr. {{$faculty->fname}} {{$faculty->lname}}
					@elseif($faculty->gender=="Female")
					Mrs. {{$faculty->fname}} {{$faculty->lname}}
					@endif
				</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">
	<div class="container">
		<h1 class="text-center">
			@if($faculty->gender=="Male")
			Mr. {{$faculty->fname}} {{$faculty->lname}}
			@elseif($faculty->gender=="Female")
			Mrs. {{$faculty->fname}} {{$faculty->lname}}
			@endif
		</h1>
		<div class="row" style="margin-top: 52px;">
			<div class="col-md-4"></div>
			<div class="col-md-8">
				<table class="table">
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Faculty ID</td>
						<td><b>{{$faculty->id}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">2</th>
						<td>Department ID</td>
						<td><b>{{$faculty->department_id}}</b></td> 
					</tr>  
					<tr>
						<th scope="row">3</th>
						<td>Branch ID</td>
						<td><b>{{$faculty->branch_id}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">4</th>
						<td>First Name</td>
						<td><b>{{$faculty->fname}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">5</th>
						<td>Last Name</td>
						<td><b>{{$faculty->lname}}</b></td> 
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Date Of Birth</td>
						<td><b>{{$faculty->dob}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">6</th>
						<td>gender</td>
						<td><b>{{$faculty->gender}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">7</th>
						<td>Email</td>
						<td><b>{{$faculty->email}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">8</th>
						<td>Phone</td>
						<td><b>{{$faculty->phone}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">9</th>
						<td>Address</td>
						<td><b>{{$faculty->address}}</b></td> 
					</tr> 
					<tr>
						<th scope="row">12</th>
						<td>Status</td>
						@if($faculty->status==1)
						<td><b>Active</b></td> 
						@elseif($faculty->status==0)
						<td><b>Inactive</b></td> 
						@endif
					</tr>
					<tr>
						<th scope="row">12</th>
						<td>Added At</td>
						<td><b>{{$faculty->created_at}}</b></td> 
					</tr> 
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<!-- /Contact -->
@endsection