@extends("layout.bootstrap")
@section("content")
<div class="container">
<div>
	<a href="/employee">Employee</a>: <a href="/employee/{{$order->customer->employee->employeeNumber}}">{{$order->customer->employee->firstName}} {{$order->customer->employee->lastName}}</a>
	&nbsp;|&nbsp;
	<a href="/customer/{{$order->customer->customerNumber}}">Customer: {{$order->customer->customerName}}</a>
</div>
<hr>
<table class="table">
	<tr>
		<td>
			Customer Name
		</td>
		<td>
			: {{$customer->customerName}}
		</td>
	</tr>
	<tr>
		<td>
			Order Number
		</td>
		<td>
			: {{$order->orderNumber}}
		</td>
	</tr>
	<tr>
		<td>
			Order Time
		</td>
		<td>
			: {{$order->orderDate}}
		</td>
	</tr>
	<tr>
		<td>
			Order Status
		</td>
		<td>
			: {{$order->status}}
		</td>
	</tr>
</table>
<hr>
<strong>Ordered Product</strong>
<table>
	<thead>
	<tr>
		<th>Product Name</th>
	</tr>
	</thead>
	<tbody>
	@foreach($myproducts as $myproduct)
	<tr>
		<td>{{$myproduct->productName}}</td>
		<td></td>
	</tr>
	@endforeach
	</tbody>
</table>
<hr>
<table>
	<tr>
		<th>Product Name</th>
	</tr>
	@foreach($products as $product)
	<tr>
		<td>{{$product->productName}}</td>
		<td>
			<form action="/buy" method="post">
				<input type="hidden" name="product" value="{{$product->productCode}}">
				<input type="hidden" name="order" value="{{$order->orderNumber}}">
				<button type="submit">Buy</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
<hr>
</div>
@include("component.jquery")
@endsection