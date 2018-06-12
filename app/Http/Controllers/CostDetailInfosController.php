<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostDetailInfosController extends Controller
{
    public function costList () {
    	return view('costdetail.cosedetaillist');
    }
}
