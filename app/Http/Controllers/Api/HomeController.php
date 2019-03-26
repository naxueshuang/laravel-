<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Novel;

class HomeController extends Controller
{
    //小数首页banner图
    public function banners(Request $request)
    {
    	$num = $request->input('num',3);

    	$movel = new Novel();

    	$list = $novel->getBanners();

    	$return = [
    		'code' => 2000,
    		'msg'  => "获取banner成功",
    		'data' => $list
    	];

    	return json_encode($return);
    }

    //最新小说
    public function newList()
    {

    }

    public function clickList()
    {

    }
}
