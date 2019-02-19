@extends('layouts.app')

@section('content')

	<h1>Supplier List</h1>

	<div class="container">
		<table class="table">
				<thead class="thead-dark">
		    <tr>
		      	<th scope="col">Name</th>
		      	<th scope="col">Contact</th>
		     	<th scope="col">Email</th>
		      	<th scope="col">Location</th>
		   		<th scope="col">Car Supplied</th>
		       	
			</tr>
				</thead>
				<tbody>
					@foreach($suppliers as $supplier)
					<tr>
	                    <td><a href="/supplier/{{ $supplier->id }}">{{ $supplier->name }}</a></td>
						<td>{{ $supplier->contact }}</td>
						<td>{{ $supplier->email }}</td>
						<td>{{ $supplier->location }}</td>
					    <td>{{ $supplier->car_supplied }}</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
		
@endsection