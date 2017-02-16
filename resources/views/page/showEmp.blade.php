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
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-info">
					<div class="panel-heading">Employee's Info</div>
					<div class="panel-body">
					<table class="table">
						<tr>
							<th>
								Name
							</th>
							<td>
								: {{$employee->firstName}} {{$employee->lastName}}
							</td>
						</tr>
						<tr>
							<th>
								Extension
							</th>
							<td>
								: {{$employee->extension}}
							</td>
						</tr>
						<tr>
							<th>
								Email
							</th>
							<td>
								: {{$employee->email}}
							</td>
						</tr>
						<tr>
							<th>
								Office
							</th>
							<td>
								: {{$employee->office->city}}
							</td>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-left">
					<button class="btn btn-default" data-toggle="modal" data-target="#newcustomer">Add New Customer</button>
				</div>
				<div class="btn-group pull-right">
					<a class="btn btn-default" href="">Delete Employee</a>
					<button class="btn btn-default" data-toggle="modal" data-target="#editInfo">Edit Employee's Info</button>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Employee's Customers
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone</th>
								<th>Address</th>
								<th>City</th>
								<th>State</th>
								<th>Postal Code</th>
								<th>Country</th>
								<th colspan="2">Option</th>
							</tr>
						</thead>
						<tbody>
						@foreach($customer as $cust)
							<tr>
								<td>{{$cust->customerName}}</td>
								<td>{{$cust->phone}}</td>
								<td>{{$cust->addressLine1}}<br>{{$cust->addressLine2}}</td>
								<td>{{$cust->city}}</td>
								<td>{{$cust->state}}</td>
								<td>{{$cust->postalCode}}</td>
								<td>{{$cust->country}}</td>
								<td><a class="btn btn-default btn-block" href="/customer/{{$cust->customerNumber}}"><i class="fa fa-user"></i></a></td>
								<td><a class="btn btn-default btn-block" href=""><i class="fa fa-trash"></i></a></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Modal Edit Info start --}}
<div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Info</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- Modal end --}}
{{-- Modal Add Customer start --}}
<div class="modal fade" id="newcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Customer</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- Modal end --}}
@include("component.jquery")
@endsection