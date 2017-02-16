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
								<a class="btn btn-info" href="/employee/{{$employee->employeeNumber}}"><i class="fa fa-address-card-o"></i></a>
							</td>
							<td>
								<a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
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
    	<form method="post" action="/employee" class="form-horizontal">
    	<div class="form-group">
    		<label class="col-sm-3 control-label">First Name</label>
    		<div class="col-sm-9">
    			<input type="text" name="fname" class="form-control">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3 control-label">Last Name</label>
    		<div class="col-sm-9">
    			<input type="text" name="lname" class="form-control">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3 control-label">E-mail</label>
    		<div class="col-sm-9">
    			<input type="text" name="email" class="form-control">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3 control-label">Reports to</label>
    		<div class="col-sm-9">
    			<select class="form-control">
    				@foreach($employees as $emp)
    				<option value="{{$emp->employeeNumber}}">{{$emp->firstName}} {{$emp->lastName}}</option>
    				@endforeach
    			</select>
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3 control-label">Office</label>
    		<div class="col-sm-9">
    			<select class="form-control">
    				@foreach($offices as $office)
    				<option value="{{$office->officeCode}}">{{$office->territory}}</option>
    				@endforeach
    			</select>
    		</div>
    	</div>
    	
    	<div class="form-group">
    		<label class="col-sm-3 control-label">Job Title</label>
    		<div class="col-sm-9">
    			<input type="text" name="state" class="form-control">
    		</div>
    	</div>
    	<div class="form-group">
    		<div class="col-sm-9 col-sm-offset-3">
    			<button type="submit" class="btn btn-primary">Save changes</button>
    		</div>
    	</div>
    	</form>
      </div>
    </div>
  </div>
</div>
{{-- Modal New Employee End --}}
@include("component.jquery")
@endsection