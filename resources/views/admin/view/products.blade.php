@extends('admin.master')
  @section('content')
  @if(count($product)>0)
  		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="panel-body widget-shadow">

					<div class="bs-example widget-shadow" data-example-id="bordered-table hoverable-table">
						<h4>Bordered Basic Table:</h4>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
								 <th>#</th>
								 <th>Name</th>
								 <th>Weight</th>
								 <th>Price</th>
								 <th>Discount Price</th>
								 <th>Category</th>
								 <th>Details</th>
								 <th></th>
								 <th></th>
								</tr>
							</thead>
							<tbody>
							@foreach($product as $pro)
								<tr>
								<th scope="row">{{$pro->id}}</th>
								<td>{{$pro->name}}</td>
								<td>{{$pro->weight}}</td>
								<td>{{$pro->price}}</td>
								<td>{{$pro->discountprice}}</td>
							@foreach($category as $cat)
									@if ($pro->category == $cat->id)
									<td>{{$cat->name}}</td>
									@endif
									@endforeach
									<td>{{$pro->discountprice}}></td>
									<td>{{$pro->details}}></td>
								<td><a href="{{url('/edit_products/'.$pro->id)}}" class="btn btn-primary btn-lg"><i class="fa fa-edit"></a></i></td>
								<td>
								<form action="{{url('products/'.$pro->id)}}" method="POST">
                      			@csrf
                      			@method('DELETE')
								<button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-lg"><i class="fa fa-trash"></button></i></td>
						</form>
							</tr>
							</tr>
						@endforeach
						</tbody>
					</table>
					@else if
<div id="page-wrapper">
	<div class="main-page">
	<div class="tables">
	<div class="panel-body widget-shadow">
<div class="alert alert-info" style="text-align:center">
  <strong>Info!</strong> There Are No Rows To View !!!
</div>
		@endif
	</div>
	</div>
	</div></div></div>
@endsection
