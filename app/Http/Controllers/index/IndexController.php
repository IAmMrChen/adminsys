<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index () {
    	return view('index.index');
    }

    public function testComponent () {
    	return view('test.testcomponent');
    }

    public function testvue () {
    	return view('test.testtwo');
    }

    public function test () {
    	return 100;
    }
}
