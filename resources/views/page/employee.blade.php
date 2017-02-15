@extends("layout.bootstrap")
@section("content")
<div class="container">
zzzz
<table class="table">
<thead>
	<tr>
		<th>Name</th>
	</tr>
</thead>
<tbody>
	@foreach($employees as $employee)
	<tr>
		<td>{{$employee->firstName}} {{$employee->lastName}}</td>
		<td><a href="/employee/{{$employee->employeeNumber}}">Show Detail</a></td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
@include("component.jquery")
@endsection