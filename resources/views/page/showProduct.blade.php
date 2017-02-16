@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
			@include("component.sidebar")
	</div>
	<div class="col-sm-9">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h5><strong>PRODUCT LINE'S INFO</strong></h5>
        </div>
        <div class="panel-body">
            <div class="col-sm-3">
                <img src="{{ $productline->image }}">
            </div>
            <div class="col-sm-9">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Text Description </strong></td>
                        <td><strong>: </strong>{{$productline->textDescription}} </td>
                    </tr>
                    <tr>
                        <td><strong>HTML Description </strong></td>
                        <td><strong> :</strong> {{$productline->htmlDescription}} </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    </div>
</div>
@include("component.jquery")
@endsection