<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\CostDetailInfos;

class CostDetailInfosController extends Controller
{
    public function costList () {
    	return view('costdetail.cosedetaillist');
    }

    public function AddCost () {
    	return view('costdetail.editcost');
    }

    public function DoAddCost (Request $request) {
    	$location = '厦门市';
		$cost_type = '餐饮';
		$pay_type = '支付宝';
		$pay_total = 2500;
		$payment_time = "2018-08-08";
		$remark = "测试腾讯云数据库";

		$res['status_code'] = 200;
		$res['message'] = 'ok';
		$res['data'] = [];
		
		$costDetail = new CostDetailInfos();
		$resAdd = $costDetail->DoAdd($location
								   , $cost_type
								   , $pay_type
								   , $pay_total
								   , $payment_time
								   , $remark);

		if (!$resAdd) {
			$res['status_code'] = 201;
			$res['message'] = '添加失败';
		}

		return $res;
    }
}
