@extends('share.layouts')
@section('content')
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="col-md-12">
	      <div class="panel panel-default">
	        <div class="panel-heading">
	           Context Classes
	        </div>
	        
	        <div class="panel-body">
	          <div class="table-responsive">
	            <table class="table">
	              <thead>
	                <tr>
	                  <th>#</th>
	                  <th>First Name</th>
	                  <th>Last Name</th>
	                  <th>Username</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr class="success">
	                  <td>1</td>
	                  <td>Mark</td>
	                  <td>Otto</td>
	                  <td>@mdo</td>
	                </tr>
	                <tr class="info">
	                  <td>2</td>
	                  <td>Jacob</td>
	                  <td>Thornton</td>
	                  <td>@fat</td>
	                </tr>
	                <tr class="warning">
	                  <td>3</td>
	                  <td>Larry</td>
	                  <td>the Bird</td>
	                  <td>@twitter</td>
	                </tr>
	                <tr class="danger">
	                  <td>4</td>
	                  <td>John</td>
	                  <td>Smith</td>
	                  <td>@jsmith</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>
	        </div>
	      </div>
	  	</div>
	  </div>
	</div>
@endsection