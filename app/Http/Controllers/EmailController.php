<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function verify ($token) {

    	$user = User::where('confirm_token', $token)->first();

    	if (is_null($user)) {
    		return redirect('/home');
    	}

    	$user->is_active = 1;
    	$user->confirm_token = str_random(50);
    	$user->save();

    	// 验证成功直接登陆
    	Auth::login($user);

    	return redirect('/home');
    }

    public function test () {
    	dd(env('NEW_APP_URI'));
    }
}
