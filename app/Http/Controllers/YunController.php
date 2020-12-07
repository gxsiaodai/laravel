<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class YunController extends Controller
{

  //登陆页面
  public function index(){

  	$data=DB::table('abs')->get();

  	
  	return view('user')->with('data',$data);
  }

   //处理登录 操作页面 
public function yun1(){
   $s=$_POST['user'];
   $d=$_POST['pass'];

   if($s==''){
   	die('这里不能是空的');
   }elseif($d==''){
   	die('这里禁止出现空的');
   }

   $a=['11','22'];
   foreach($a as $value){
   	if($s==$value){
   		die('不能使用');
   	}elseif($d==$value){
   		die('禁止使用');
   	}
   }

	var_dump($_POST);
}

//通过带参数路由访问控制器
 public function yunfeng($aaa,$bbb){
 var_dump($aaa);
  var_dump($bbb);

 }

 public function abc(){
  //获取别名的url
  //return route('one');
  echo '好好学习';
 }

 public function xiao(){
  //通过命名路由 实现重定向
  return redirect('abc');
  //或者是 
  //return redirect()->route('one'); 
 }
     }
  
 
   