@extends("layout.bootstrap")
@section("content")
<div class="container">
zzzz
<form class="form-horizontal" method="post" action="/customer">
Employee
<select name="emp">
	@foreach($employee as $emp)
		<option value="{{$emp->employeeNumber}}">{{$emp->firstName}} {{$emp->lastName}}</option>
	@endforeach
</select><br>
First Name <input type="text" name="fname"><br>
Last Name <input type="text" name="lname"><br>
Phone <input type="text" name="phone"><br>
Address 1 <input type="text" name="address1"><br>
Address 2 <input type="text" name="address2"><br>
City <input type="text" name="city"><br>
State <input type="text" name="state"><br>
Postal Code <input type="text" name="postal"><br>
Country <input type="text" name="country"><br>
<button type="submit">Create</button>
</form>
</div>
@include("component.jquery")
@endsection