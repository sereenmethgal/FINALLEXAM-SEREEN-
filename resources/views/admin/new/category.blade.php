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
@endif
					<div class="form-grids row widget-shadow" data-example-id="basic-forms">
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">
	                <form class="form-horizontal" role="form" method="POST" action="{{url('/newcat')}}">
                    @csrf
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Category Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="priority" class="col-md-4 control-label">Main Category</label>

                            <div class="col-md-6">
                                <select id="maincat" type="" class="form-control" name="maincat">
                                    <option value="">Select main category</option>
                                    @foreach($maincats as $maincat)
                                	<option value="{{$maincat->id}}">{{$maincat->name}}</option>
                                	@endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Add Category
                                </button>
                            </div>
                        </div>
                    </form>
	            </div>
	        </div>
	    </div>
	</div>
    </div>
    @endsection
