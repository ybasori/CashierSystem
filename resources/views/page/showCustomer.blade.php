@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		<div class="row">
			@include("component.sidebar")
		</div>
	</div>
	<div class="col-sm-9">
		<div>
			<a href="/employee">Employee</a>: <a href="/employee/{{$customer->salesRepEmployeeNumber}}">{{$employee->firstName}} {{$employee->lastName}}</a>
			&nbsp;|&nbsp;
			Customer: {{$customer->customerName}}
		</div>
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
			<tr>
				<td>{{$customer->customerName}}</td>
				<td>{{$customer->phone}}</td>
				<td>{{$customer->addressLine1}}</td>
				<td>{{$customer->addressLine2}}</td>
				<td>{{$customer->city}}</td>
				<td>{{$customer->state}}</td>
				<td>{{$customer->postalCode}}</td>
				<td>{{$customer->country}}</td>
			</tr>
		</tbody>
		</table>
		<form action="/order" method="post">
			<input type="hidden" name="customerNumber" value="{{$customer->customerNumber}}">
			<button type="submit">New Order</button>
		</form>
		<table class="table">
		<thead>
			<tr>
				<th>Order Time</th>
				<th>Required Date</th>
				<th>Shipped Date</th>
				<th>Status</th>
				<th>Comment</th>
			</tr>
		</thead>
		<tbody>
		@foreach($myorders as $order)
			<tr>
				<td>{{$order->orderDate}}</td>
				<td>{{$order->requiredDate}}</td>
				<td>{{$order->shippedDate}}</td>
				<td>{{$order->status}}</td>
				<td>{{$order->comments}}</td>
				<td><a href="/order/{{$order->orderNumber}}">Show Detail</a></td>
			</tr>
		@endforeach
		</tbody>
		</table>
	</div>
</div>
@include("component.jquery")
@endsection