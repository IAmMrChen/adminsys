<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostDetailInfos extends Model
{	
	use SoftDeletes;

    protected $table = 'cost_detail_infos';

    protected $datas = ['deleted_at'];
}
