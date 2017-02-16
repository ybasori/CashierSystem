@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		@include("component.sidebar")
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-sm-12">
				<h1>Order</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<thead>
						<th>
							Order Number
						</th>
					</thead>
					<tbody>
						@foreach($orders as $order)
						<tr>
							<td>Order #{{$order->orderNumber}}</td>
							<td><a href="/order/{{$order->orderNumber}}">Show Detail</a></td>
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