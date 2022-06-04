@extends('admin.master')
  @section('content')
  @if(count($category)>0)
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
								 <th>Main Category</th>
								 <th></th>
								 <th></th>
								</tr>
							</thead>
							<tbody>
							@foreach($category as $cat)
								<tr>
								<th scope="row">{{$cat->id}}</th>
								<td>{{$cat->name}}</td>
								@foreach($maincat as $main)
								@if($cat->maincat == $main->id)
								<td>{{$main->name}}</td>
								@endif
								@endforeach
								<td>
								<button class="btn btn-primary btn-lg"><i class="fa fa-edit"></button></i></td>
								<td>
								<form action="{{url('category/'.$cat->name)}}" method="POST">
                      			@csrf
                      			@method('DELETE')
								<button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-lg"><i class="fa fa-trash"></button></i></td>
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
