@extends('admin.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="page-wrapper">
					<div class="main-page">
						<div class="forms">
							<h2 class="title1">Forms</h2>
							@if (\Session::has('success'))
								<div class="alert alert-success" style="text-align:center;">
									<h4>{!! \Session::get('success') !!}</h4>
								</div>
							@endif					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Basic Form :</h4>
								</div>
								<div class="form-body">
									<form role="form" method="POST" action="{{url('/edit_products/'.$product->id)}}">
										@csrf
										<div class="form-group">
											<label for="name" class="col-md-4 control-label">Name</label>
											<input id="name" type="text" class="form-control" name="name" value="{{$product->name}}">
										</div>
										<div class="form-group">
											<label for="weight" class="col-md-4 control-label">Weight</label>
											<input id="weight" type="text" class="form-control" name="weight" value="{{$product->weight}}">
										</div>

										<div class="form-group">
											<label for="price" class="col-md-4 control-label">Price</label>
											<input id="price" type="text" class="form-control" name="price" value="{{$product->price}}">
										</div>


										<div class="form-group">
											<label for="weight" class="col-md-4 control-label">Discount Price</label>
											<input id="discountprice" type="text" class="form-control" name="discountprice" value="{{$product->discountprice}}">
										</div>
										<div class="form-group">
											<select id="category" type="category" class="form-control" name="category">
												<option value="">Select The Product Category</option>
												@foreach($category as $cat)
													<option value="{{$cat->id}}" @if($cat->id==$product->category) selected @endif>{{$cat->name}}</option>
												@endforeach
											</select>
										</div>

										<div class="form-group">
											<label for="details" class="col-md-4 control-label">Details</label>
											<textarea rows="10" id="details" type="text" class="form-control" name="details">{{$product->details}}</textarea>
										</div>

										<div class="form-group">
											<label for="image">Image Upload</label>
											<input type="file" id="image" name="fimage">
											@if($product->image)
											<img src="{{$product->image}}">
												@endif
										</div>
										<div class="form-group">
											<input type="file" id="image" name="simage">
											@if($product->simage)
												<img src="{{$product->simage}}">
											@endif
										</div><div class="form-group">
											<input type="file" id="image" name="timage">
											@if($product->timage)
												<img src="{{$product->timage}}">
											@endif
										</div>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div>
						</div>

@endsection
