<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;

use App\Http\Controllers\Controller;
//前台页面控制器
class IndexController extends Controller
{
//前台页面管理方法
    public function index(){
    

     //echo '我是前台页面';
     return view('home.index');
    }
 public function post(){
 	 var_dump($_POST);
 }
    
}
   