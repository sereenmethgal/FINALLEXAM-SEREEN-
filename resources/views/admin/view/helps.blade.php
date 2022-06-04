@extends('admin.master')
  @section('content')
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
								 <th>First Name</th>
								 <th>Last Name</th>
								 <th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
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
