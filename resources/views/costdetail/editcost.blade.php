@extends('share.layouts')
@section('content')
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
	        	<label>消费地点:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费类型:</label>
					</div>
					<!-- <div class="">
	        	<input class="form-control">
					</div> -->
					<div class="col-md-6">
            <select class="form-control">
                <option>餐饮</option>
                <option>娱乐</option>
                <option>出行</option>
                <option>礼品</option>
                <option>礼品</option>
                <option>生活用品</option>
            </select>
          </div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费方式:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费金额:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费时间:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>备注:</label>
					</div>
					<div class="col-md-6">
            <!-- <label>Text area</label> -->
            <textarea class="form-control" rows="3"></textarea>
          </div>
				</div>
      </div>

      <div class="row">
      	<a href="#" class="btn btn-warning btn-sm"><i class="fa fa-level-up">&nbsp;提交</i></a>
      </div>
	  </div>
	</div>
@endsection