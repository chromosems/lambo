@extends('layouts.app')


@section('content')

<form method="POST" action="/supplier">
	@csrf
	<div class="col-sm-8 mx-auto">

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name">
			
		</div>
		<div class="form-group">
			<label>Email</label>
			<input class="form-control" type="email" name="email">
			
		</div>

		<div class="form-group">
			<label>Contact</label>
			<input class="form-control" type="text" name="contact">
			
		</div>

		<div class="form-group">
			<label>Car Supplied</label>
			<input class="form-control" type="text" name="car_supplied">
			
		</div>

		<div class="form-group">
			<label>Location</label>
			<input class="form-control" type="text" name="location">
			
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">Submit</button>
			
		</div>
		
	</div>
	
</form>

@endsection