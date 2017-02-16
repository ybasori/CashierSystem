@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
		@include("component.sidebar")
	</div>
	<div class="col-sm-9">
		<div class="row">
			<div class="col-sm-12">
				<h1>Employees</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<button class="btn btn-primary" data-toggle="modal" data-target="#newEmp">Add New Employee</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th colspan="2">Option</th>
						</tr>
					</thead>
					<tbody>
						@foreach($employees as $employee)
						<tr>
							<td>{{$employee->firstName}} {{$employee->lastName}}</td>
							<td>
								<a class="btn btn-info btn-block" href="/employee/{{$employee->employeeNumber}}"><i class="fa fa-address-card-o" aria-hidden="true"></i>
</a>
							</td>
							<td>
								<a class="btn btn-danger btn-block" href=""><i class="fa fa-trash" aria-hidden="true"></i>
</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
{{-- Modal New Employee Start --}}
<div class="modal fade" id="newEmp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Employee</h4>
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
{{-- Modal New Employee End --}}
@include("component.jquery")
@endsection