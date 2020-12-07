<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;

use App\Http\Controllers\Controller;
//前台用户管理页面
class FasongController extends Controller
{
//前台用户管理方法
    public function index(){
    
     return view('home.fasong'); 
    }


public function post(){
	 $aa = $_POST['aa'];
$bb = $_POST['bb'];

var_dump( $POST );

}
    
}
   