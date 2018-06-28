@extends('share.layouts')
@section('content')
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-md-12">
			    <div class="panel panel-default">
		        <div class="panel-heading">
		          <span>消费记录列表</span>	
			        <a href="#" class="btn btn-success btn-sm float-right"><i class="fa fa-plus">&nbsp;&nbsp;添加</i></a>
		        </div>
		        <div class="panel-body">
		          <div class="table-responsive">
		            <table class="table">
		              <thead>
		                <tr>
		                  <th></th>
		                  <th>消费地点</th>
		                  <th>消费类型</th>
		                  <th>消费方式</th>
		                  <th>消费金额</th>
		                  <th>消费时间</th>
		                  <th>备注</th>
		                  <th style="text-align: center;">操作</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>1</td>
		                  <td>Mark</td>
		                  <td>Otto</td>
		                  <td>@mdo</td>
		                  <td>@mdo</td>
		                  <td>@mdo</td>
		                  <td>@mdo</td>
		                  <td style="text-align: center;">
		                  	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;编辑</i></a>
		                  	<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o">&nbsp;删除</i></a>
		                  </td>
		                </tr>
		                <tr >
		                  <td>2</td>
		                  <td>Jacob</td>
		                  <td>Thornton</td>
		                  <td>@fat</td>
		                  <td>@fat</td>
		                  <td>@fat</td>
		                  <td>@fat</td>
		                  <td style="text-align: center;">
		                  	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;编辑</i></a>
		                  	<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o">&nbsp;删除</i></a>
		                  </td>
		                </tr>
		                <tr >
		                  <td>3</td>
		                  <td>Larry</td>
		                  <td>the Bird</td>
		                  <td>@twitter</td>
		                  <td>@twitter</td>
		                  <td>@twitter</td>
		                  <td>@twitter</td>
		                  <td style="text-align: center;">
		                  	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;编辑</i></a>
		                  	<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o">&nbsp;删除</i></a>
		                  </td>
		                </tr>
		                <tr >
		                  <td>4</td>
		                  <td>John</td>
		                  <td>Smith</td>
		                  <td>@jsmith</td>
		                  <td>@jsmith</td>
		                  <td>@jsmith</td>
		                  <td>@jsmith</td>
		                  <td style="text-align: center;">
		                  	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;编辑</i></a>
		                  	<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o">&nbsp;删除</i></a>
		                  </td>
		                </tr>
		              </tbody>
		            </table>
		          </div>
		        </div>
		      </div>
		  	</div>
		  </div>
	  </div>
	</div>
@endsection