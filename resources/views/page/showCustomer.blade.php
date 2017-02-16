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
				<a class="btn btn-default" href="/employee/{{$customer->salesRepEmployeeNumber}}">Employee: <strong>{{$employee->firstName}} {{$employee->lastName}}</strong></a>
				<a class="btn btn-default">Customer: <strong>{{$customer->customerName}}</strong></a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h5><strong>CUSTOMER'S INFO</strong></h5>
				</div>
				<div class="panel-body">
				<div class="col-sm-6">
					<table class="table">
						<tr>
							<th>Name</th>
							<td>{{$customer->customerName}}</td>
						</tr>
						<tr>
							<th>Phone</th>
							<td>{{$customer->phone}}</td>
						</tr>
						<tr>
							<th>Country</th>
							<td>{{$customer->country}}</td>
						</tr>
						<tr>
							<th>State</th>
							<td>{{$customer->state}}</td>
						</tr>
						<tr>
							<th>City</th>
							<td>{{$customer->city}}</td>
						</tr>
					</table>
				</div>
				<div class="col-sm-6">
					<table class="table">
						<tr>
							<th rowspan="2">Address</th>
							<td>{{$customer->addressLine1}}</td>
						</tr>
						<tr>
							<td>{{$customer->addressLine2}}</td>
						</tr>
						<tr>
							<th>Postal Code</th>
							<td>{{$customer->postalCode}}</td>
						</tr>
					</table>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-left">
					<form action="/order" method="post">
						<input type="hidden" name="customerNumber" value="{{$customer->customerNumber}}">
						<button class="btn btn-default" type="submit">Add New Order</button>
					</form>
				</div>
				<div class="pull-right btn-group">
					<a class="btn btn-default" href="">Delete Customer</a>
					<a class="btn btn-default" href="">Edit Customer's Info</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h5><strong>CUSTOMER'S ORDERS</strong></h5>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Order Time</th>
								<th>Required Date</th>
								<th>Shipped Date</th>
								<th>Status</th>
								<th>Comment</th>
								<th colspan="2">Option</th>
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
		</div>
		
	</div>
</div>
@include("component.jquery")
@endsection