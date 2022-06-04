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
	                <form class="form-horizontal" role="form" method="POST" action="{{url('/faqs')}}">
                    @csrf
                        <div class="form-group">
                            <label for="question" class="col-md-4 control-label">Question</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control" name="question" value="">
                             </div>
                        </div>

                        <div class="form-group">
                            <label for="answer" class="col-md-4 control-label">Answer</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="answers" class="form-control" name="answer"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Add Faqs
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
