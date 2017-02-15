@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		<div class="row">
			@include("component.sidebar")
		</div>
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-sm-12">
				<a href="/employee">Employee</a>: <a href="/employee/{{$order->customer->employee->employeeNumber}}">{{$order->customer->employee->firstName}} {{$order->customer->employee->lastName}}</a>
				&nbsp;|&nbsp;
				<a href="/customer/{{$order->customer->customerNumber}}">Customer: {{$order->customer->customerName}}</a>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<h2><strong>ORDER DETAIL</strong></h2>
				<table class="table table-bordered">
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
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h3>Ordered Product</h3>
				<table class="table table-stripped">
					<thead>
					<tr>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price Each</th>
					</tr>
					</thead>
					<tbody>
					@foreach($myproducts as $myproduct)
					<tr>
						<td>{{$myproduct->productName}}</td>
						<td>{{$myproduct->pivot->quantityOrdered}}</td>
						<td>{{$myproduct->pivot->priceEach}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
				@if ( $order->status == "waiting")
					<div class="pull-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComment">Save Order</button>
					</div>
				@elseif ( $order->status == "confirmed")
					<div class="pull-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCommentShipped">Shipped</button>
					</div>
				@else
					<div class="pull-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComment" disabled>Save Order</button>
					</div>
				@endif
			</div>
		</div>
		<hr>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2><strong>PRODUCT LIST</strong></h2>
			</div>
			<div class="panel-body">
				@foreach($products as $product)
				<div class="col-sm-4">
					<div class="thumbnail">
						<div class="caption">
							<p style="text-align:center"><strong>{{$product->productName}}</strong></p>
							<hr>
							<button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modalDetail">Show Detail</button>
							@if ($order->status == "waiting")
							<button type="button" class="btn btn-success btn-block buyModal" data-toggle="modal" data-target="#modalBuy" id="{{$product->productCode}}">Buy</button>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div><!--END PANEL-->
	</div>
</div><!--END ROW-->

<!--MODAL DETAIL PRODUCT-->
<div class="modal fade" id="modalDetail" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><strong>Product Detail</strong></h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
						<td>Product Name</td>
						<td>: {{$product->productName}}</td>
					</tr>
					<tr>
						<td>Product Vendor</td>
						<td>: {{$product->productVendor}}</td>
					</tr>
					<tr>
						<td>Product Description</td>
						<td>: {{$product->productDescription}}</td>
					</tr>
					<tr>
						<td>Stock</td>
						<td>: {{$product->quantityInStock}}</td>
					</tr>
					<tr>
						<td>Price</td>
						<td>: {{$product->buyPrice}}</td>
					</tr>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
	</div>
</div>
<!--END MODAL DETAIL-->
<!--MODAL BUY-->
<div class="modal fade" id="modalBuy" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><strong>What's Wrong</strong></h4>
			</div>
			<form role="form" method="post" action="/buy" class="form-horizontal">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label col-sm-2" for="quantity">Quantity</label>
						<div class="col-sm-10">
							<input type="hidden" value="{{$order->orderNumber}}" name="orderNumber">
							<input type="text" name="productCode" id="productCode">
							<input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="price">Price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="price" name="price" value="{{$product->buyPrice}}" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="totalPrice">Total Price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="totalPrice" name="totalPrice" readonly>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" >Buy</button>
				</div>
			</form>
		</div>
		
	</div>
</div>
  <!--END MODAL BUY-->
  <!--Modal COmment-->
<div class="modal fade" id="modalComment" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><strong>Comment Order</strong></h4>
			</div>
			<form role="form" class="form-horizontal" action="/order/{{$order->orderNumber}}" method="post">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<input type="hidden" name="status" value="confirmed">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label col-sm-2" for="comment">Comment</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="comment" name="comment" placeholder="Comment"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" >Save</button>
				</div>
			</form>
		</div>
		
	</div>
</div>

<!--Modal COmment-->
<div class="modal fade" id="modalCommentShipped" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><strong>Comment Shipped Order</strong></h4>
			</div>
			<form role="form" class="form-horizontal" action="/order/{{$order->orderNumber}}" method="post">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
				<input type="hidden" name="status" value="shipped">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label col-sm-2" for="comment">Comment</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="comment" name="comment" placeholder="Comment"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" >Save</button>
				</div>
			</form>
		</div>
		
	</div>
</div>

@include("component.jquery")
<script>
	$(document).ready(function(){
		$('.buyModal').click(function(){
			$('#productCode').val($(this).attr('id'));
		});
		$('#quantity').change(function(){
			var qty = parseInt($('#quantity').val());
			var price = parseInt($('#price').val());
			var total = qty * price;
			$('#totalPrice').val(total);
		});
	});
</script>
@endsection