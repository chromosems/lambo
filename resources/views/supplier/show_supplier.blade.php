@extends('layouts.app')

	@section('content')
	
	<h1>Supplier</h1>

	<div class="container">
		<div class="col-sm-7">
			<div class="card">
				<div class="row">
					<div class="col-sm-3">
						<h5>Profile</h5>
					</div>
				</div>
				<center>
					<h6>Info</h6>
					<div class="col-sm-8 blog-main">
						
							<h4>{{ $supplier->name }}</h4> 
							<h4>{{ $supplier->contact }}</h4>
							{{ $supplier->email }}
							{{ $supplier->location }}
							{{ $supplier->car_supplied }}

					</div>
				</center>
                 <div class="card-body">
				<div class="row">
					<div col-sm-4>
						<a href="/supplier/{{ $supplier->id }}/edit" class="btn btn-success">Edit</a>
						<form action="{{ route('supplier.destroy',$supplier->id)}}" method="post">
							@csrf
							@method('DELETE')
							<input type="submit" value="DELETE" class="btn btn-danger">
							
						</form>
						
					</div>
				</div>
				</div>
				
			</div>

		</div>
	</div>

@endsection