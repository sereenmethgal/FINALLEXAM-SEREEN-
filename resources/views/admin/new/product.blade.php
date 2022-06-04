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
							<form role="form" method="POST" action="{{url('/newpro')}}">
							@csrf
								<div class="form-group">
									<label for="name" class="col-md-4 control-label">Name</label>
									<input id="name" type="text" class="form-control" name="name" value="">
								</div>
								  <div class="form-group">
										<label for="weight" class="col-md-4 control-label">Weight</label>
										<input id="weight" type="text" class="form-control" name="weight" value="">
									</div>

									<div class="form-group">
											<label for="price" class="col-md-4 control-label">Price</label>
											<input id="price" type="text" class="form-control" name="price" value="">
										</div>


										<div class="form-group">
												<label for="weight" class="col-md-4 control-label">Discount Price</label>
												<input id="discountprice" type="text" class="form-control" name="discountprice" value="">
											</div>
											<div class="form-group">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select The Product Category</option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                	</select>
									</div>

									<div class="form-group">
									<label for="details" class="col-md-4 control-label">Details</label>
									<textarea rows="10" id="details" type="text" class="form-control" name="details" value=""></textarea>
									</div>

									<div class="form-group">
									<label for="image">Image Upload</label>
									<input type="file" id="image" name="fimage">
									</div>
									<div class="form-group">
									<input type="file" id="image" name="simage">
									</div><div class="form-group">
									<input type="file" id="image" name="timage">
									</div>
									</div>
									<button type="submit" class="btn btn-default">Submit</button>
								</form>
						</div>
					</div>

    @endsection
