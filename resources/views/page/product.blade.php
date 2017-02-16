@extends("layout.bootstrap")
@section("content")
<div class="container-fluid">
	<div class="col-sm-3">
			@include("component.sidebar")
	</div>
	<div class="col-sm-9">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5><strong>PRODUCT LINES</strong></h5>
            </div>
            
            <div class="panel-body">
            <a href="#" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
            <hr>
            @foreach ($productline as $productline)
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="{{ $productline->image}}" alt="productline">
                        <div class="caption">
                            <a href="/product/{{ $productline->productLine }}" type="button" class="btn btn-info">More Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@include("component.jquery")
@endsection