<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 新的管理系统项目路由
Route::get('/', function () {
	return view('welcome');
});
Route::get('/testcomponent', 'index\IndexController@testComponent');
Route::group([], function () {
	Route::get('/index', 'index\IndexController@index');
	Route::get('/cost/costlist', 'CostDetailInfosController@costList');
	Route::get('/cost/addcost', 'CostDetailInfosController@AddCost');
	Route::get('/cost/doaddcost', 'CostDetailInfosController@DoAddCost');
});

Route::get('/testvues', 'index\IndexController@testvue');
Route::post('/test', 'index\IndexController@test');

