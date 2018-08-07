<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostDetailInfos extends Model
{	
	use SoftDeletes;

    protected $table = 'costdetail';

    protected $datas = ['deleted_at'];

    public function DoAdd ($location
						 , $cost_type
						 , $pay_type
						 , $pay_total
						 , $payment_time
						 , $remark) {

    	$costDetail = new CostDetailInfos();
    	$costDetail->location = $location;
		$costDetail->cost_type = $cost_type;
		$costDetail->pay_type = $pay_type;
		$costDetail->pay_total = $pay_total;
		$costDetail->pay_time = $payment_time;
		$costDetail->remark = $remark;

		if ($costDetail->save()) {
		 	return $costDetail->id;
		}

		return 0;
    }
}
