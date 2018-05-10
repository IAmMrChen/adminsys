<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Naux\Mail\SendCloudTemplate;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        // 返回一个验证器实例
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {      

        // 验证通过以后将注册信息写入数据库
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => "/images/default.jpg",
            'confirm_token' => str_random(50),
            'password' => bcrypt($data['password']),
        ]);

        // 进行短信验证激活用户
        $this->sendVerifyEmail($user);

        return $user;
    }

    // 发送验证邮件方法
    public function sendVerifyEmail ($user) {
        $data = [
            'url' => route('active', [$user->confirm_token]),
            'name' => $user->name,
        ];
        $template = new SendCloudTemplate('test_template_active', $data);

        Mail::raw($template, function ($message) use ($user) {
            $message->from('791293535@qq.com', '仿知乎平台');

            $message->to($user->email);
        });
    }
}
