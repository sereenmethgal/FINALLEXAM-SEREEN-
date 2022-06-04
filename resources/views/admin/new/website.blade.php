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
	                <form class="form-horizontal" role="form" method="POST" action="{{url('/website')}}">
                    @csrf
                        <div class="form-group">
                            <label for="webname" class="col-md-4 control-label">Website Name</label>

                            <div class="col-md-6">
                                <input id="webname" type="text" class="form-control" name="webname" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="details" class="col-md-4 control-label">About Us</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="details" class="form-control" name="aboutus"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="webinfo" class="col-md-4 control-label">Website Info</label>

                            <div class="col-md-6">
                                <input id="webinfo" type="text" class="form-control" name="webinfo" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="mobno" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobno" type="text" class="form-control" name="mobno" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="phoneno" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control" name="phoneno" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="">
                             </div>
                        </div>


                        <div class="form-group">
                            <label for="faxno" class="col-md-4 control-label">Fax Number</label>

                            <div class="col-md-6">
                                <input id="faxno" type="text" class="form-control" name="faxno" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Add Information
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
