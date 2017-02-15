@extends("layout.bootstrap")
@section("content")
<div class="container">
<div><a href="/employee">Employee</a>: {{$employee->firstName}} {{$employee->lastName}}</div>
<table class="table">
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
<strong>Customers</strong>
<table>
	<tr>
		<td>First Name</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Last Name</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Phone</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Address 1</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Address 2</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>City</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>State</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Postal Code</td><td><input type="" name=""></td>
	</tr>
	<tr>
		<td>Country</td><td><input type="" name=""></td>
	</tr>
</table>
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
@include("component.jquery")
@endsection