<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
// use Collection;

class TestController extends Controller
{
    public function testCollection () {
    	$array = [
	    	[
	    		'name' => 'chen',
	    		'email' => "791293535@qq.com",
	    	],

	    	[
	    		'name' => 'xiao',
	    		'email' => "502574390@qq.com",
	    	]
    	];

    	dd(collect($array)->pluck('email', 'name'));
    }

    public function email () {
    	return view('test.testemail');
    }

    public function sendEmail () {
    	for ($i = 0; $i < 10; $i++) {
    		echo $i;
    	}
    }

    public function testEmail () {
    	$emailarr = [
    		'502574390@qq.com',
    		'791293535@qq.com',
    	];

    	$res['data'] = '';

    	$domain="http://www.laravelfor5.com";
		$url="/sendemai";
		$par="email=".implode(',',$emailarr)."&........";
		$header = "POST $url HTTP/1.0 \r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded \r\n";
		$header .= "Content-Length: " . strlen($par) . "\r\n\r\n";

		$fp = fsockopen ("http://www.baidu.com", 80, $errno, $errstr, 5);
		$res['data'] = $fp;
		return $res;
		fputs ($fp, $header . $par);
		fclose($fp);
		echo '发送完毕';
    }

    public function testArray () {
        $studentArray = [
            [
                'name' => 'chen',
                'city' => '深圳',
                'province' => '广东',
            ],
            [
                'name' => 'wu',
                'city' => '厦门',
                'province' => '福建',
            ],
            [
                'name' => 'chen',
                'city' => '贵阳',
                'province' => '贵州',
            ],
        ];

        $cityArray = [
            [
                'city_id' => 5,
                'p_id' => 1,
                'city_name' => '深圳',
            ],
            [
                'city_id' => 1,
                'p_id' => 0,
                'city_name' => '广东',
            ],
            [
                'city_id' => 6,
                'p_id' => 2,
                'city_name' => '贵阳',
            ],
        ];

        $cityCollect = collect($cityArray);
        // 获取省份id
        $resPid = $cityCollect->pluck('city_name', 'p_id')->all();
        // dd($resPid);
        // 获取城市id
        $resCity = $cityCollect->pluck('city_name', 'city_id')->all();
        $resData = [];
        foreach ($studentArray as $key => $value) {
            $province_id = array_search($value['province'], $resCity);
            $city_id = array_search($value['city'], $resCity);
            $current_city_p_id = array_search($value['city'], $resPid);

            // $resData['current_city_p_id'][$key] = $current_city_p_id;
            // $resData['province_id'][$key] = $province_id;
            // $resData['city_id'][$key] = $city_id;

            if ($province_id == $current_city_p_id && $city_id) {
                $resData[] = $city_id;
            }
        }
        dd($resData);
    }

    /*
    * test vue
    *
    */

    public function testVue () {
        return view('test.testvue');
    }

    // test url
    public function testUrl () {
        return redirect('/testurltwo');
        
    }

    public function testUrlTwo () {
        return url()->previous();
    }
}
