<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{

    public function index(){
    	//echo '我是后台控制器';
    	
    	//引入页面
    	return view('admin.index');
    }

    
}
   