@extends('admin.layout')
@section('page_title', 'Add Question')
@section('question_select', 'active')
@section('container')
<div class="overview-wrap">
	<h2 class="title-1"><i class="fas fa-question"></i> Add Question</h2>
</div>

<div class="row mt-3">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<div class="card shadow-sm">
			<div class="card-body card-block">
				<form action="{{route('question.insert')}}" method="post" class="form-horizontal">
					@csrf
					<div class="form-group">
						<label for="exam_id">Exam Name</label>
						<select class="form-control" name="exam_id">
							<option selected disabled>-Select Exam Name-</option>
							@foreach($exams as $exam)
							<option value="{{$exam->id}}">{{$exam->exam_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="question" class=" form-control-label">Question</label>
						<textarea id="question" name="question" placeholder="Enter Question..." class="form-control" required="" rows="6"></textarea>
					</div>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th width="100">Option No.</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" >1</th>
								<td>
									<div class="form-group">
										<label for="exampleInputEmail1">Option 1</label>
										<textarea type="text" class="form-control" placeholder="Enter option 1" name="opt1" required autocomplete="off"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>
									<div class="form-group">
										<label for="exampleInputEmail1">Option 2</label>
										<textarea type="text" class="form-control" placeholder="Enter option 2" name="opt2" required autocomplete="off"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<div class="form-group">
										<label for="exampleInputEmail1">Option 3</label>
										<textarea type="text" class="form-control" placeholder="Enter option 3" name="opt3" required autocomplete="off"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<div class="form-group">
										<label for="exampleInputEmail1">Option 4</label>
										<textarea type="text" class="form-control" placeholder="Enter option 4" name="opt4" required autocomplete="off"></textarea>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<div class="form-group">
										<label for="exampleInputEmail1">Answer:</label>
										<select class="form-control" name="answer">
											<option value="option1">option1</option>
											<option value="option2">option2</option>
											<option value="option3">option3</option>
											<option value="option4">option4</option>
										</select>
									</div>
								</td>
							</tr>
						</tbody>

					</table>

					<button type="submit" name="submit" class="btn btn-primary btn-sm mt-3">
						<i class="fa fa-dot-circle-o"></i> Submit
					</button>
				</form>
			</div>
		</div>
	</div>
	@endsection