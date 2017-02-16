@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		@include("component.sidebar")
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-sm-12">
				<h1>Customers</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<thead>
						<th>
							Name
						</th>
					</thead>
					<tbody>
						@foreach($customers as $cust)
						<tr>
							<td>{{$cust->customerName}}</td>
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