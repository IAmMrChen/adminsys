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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register/activation/{token}', 'EmailController@verify')->name('active');
Route::get('/test', 'EmailController@test');
// 测试collection
Route::get('/testcollection', 'TestController@testCollection');
Route::get('/email', 'TestController@email');
// 測試php異步
Route::post('/testemail', 'TestController@testEmail')->name('testemail');
Route::post('/sendemai', 'TestController@sendEmail');
// 2018.01.10
Route::get('/testarray', 'TestController@testArray');
// test vue
Route::get('/testvue', 'TestController@testVue');


// 新的管理系统项目路由
Route::group([], function () {
	Route::get('/index', 'index\IndexController@index');
	Route::get('/testcomponent', 'index\IndexController@testComponent');
});
