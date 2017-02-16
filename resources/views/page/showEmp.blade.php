@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		@include("component.sidebar")
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-sm-12">
				<div class="btn-group">
					<a class="btn btn-default">Employee: <strong>{{$employee->firstName}} {{$employee->lastName}}</strong></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1>Employee</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover">
					<tr>
						<td>
							Name
						</td>
						<td>
							{{$employee->firstName}} {{$employee->lastName}}
						</td>
					</tr>
					<tr>
						<td>
							Extension
						</td>
						<td>
							{{$employee->extension}}
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							{{$employee->email}}
						</td>
						<tr>
						<td>
							Office
						</td>
						<td>
							{{$employee->office->city}}
						</td>
					</tr>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<button class="btn btn-primary">New Customer</button>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h2>Customers</h2>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone</th>
							<th>Address 1</th>
							<th>Address 2</th>
							<th>City</th>
							<th>State</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>
					</thead>
					<tbody>
					@foreach($customer as $cust)
						<tr>
							<td>{{$cust->customerName}}</td>
							<td>{{$cust->phone}}</td>
							<td>{{$cust->addressLine1}}</td>
							<td>{{$cust->addressLine2}}</td>
							<td>{{$cust->city}}</td>
							<td>{{$cust->state}}</td>
							<td>{{$cust->postalCode}}</td>
							<td>{{$cust->country}}</td>
							<td><a href="/customer/{{$cust->customerNumber}}">Show Detail</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@include("component.jquery")
@endsection