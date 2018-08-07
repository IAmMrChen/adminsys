@extends('share.layouts')
@section('content')
	<!-- <div id="wrapper"> -->
		<div id="page-wrapper">
			<div class="form-group">
				<div class="row">
					<div class="col-md-2">
	        	<label>消费地点:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control" v-model="location">
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
            <select class="form-control" v-model="cost_type">
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
	        	<input class="form-control" v-model="pay_type">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费金额:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control" v-model="pay_total">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>消费时间:</label>
					</div>
					<div class="col-md-6">
	        	<input class="form-control" v-model="payment_time">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
	        	<label>备注:</label>
					</div>
					<div class="col-md-6">
            <textarea class="form-control" rows="3" v-model="remark"></textarea>
          </div>
				</div>
      </div>

      <div class="row" id="submit">
      	<a class="btn btn-warning btn-sm" v-on:click="submit"><i class="fa fa-level-up">&nbsp;提交</i></a>
      </div>
	  </div>
	<!-- </div> -->
@endsection

@section('script')
<script type="text/javascript">
	var value = {
		location: '',
		cost_type: '',
		pay_type: '',
		pay_total: '',
		payment_time: '',
		remark: '',
	};
	
	require(['jQuery', 'vue'], function ($, vue) { 
	    (function ($) {
	      var vm = new vue({
	        data: value,
	        el: "#wrapper",
	        methods: {
	        	submit: function () {
	        		console.log(1500);
	        		var params = {
		        		location: this.location,
								cost_type: this.cost_type,
								pay_type: this.pay_type,
								pay_total: this.pay_total,
								payment_time: this.payment_time,
								remark: this.remark,
	        		};

	        		$.post('/cost/doaddcost', params, function (data) {
	        			if (data.statut_code == 200) {
	        				alert('添加成功');
	        			} else {

	        			}
	        		}, 'json');
	        	},
	        },
	        created: function () {

	        },
	        mounted: function () {
	        },
	        components: {
	        }
	      });

	    })(jQuery);
	  })
	
</script>

@endsection