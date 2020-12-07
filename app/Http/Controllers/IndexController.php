<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;//引入redis
use DB;

use App\Http\Controllers\Controller;
class IndexController extends Controller
{
  // 测试redis
    public function redis(){
    	//以keyhevalue的方式将数据存进redis
    // Redis::set('aaa','value123');
       //通过key找到对应的value值
     //var_dump(Redis::get('aaa'));
     
    // phpinfo();
    // 
        
    //Redis::set('name','xiaolong');
    //echo Redis::get('name'); 
    //
    //                  
    //   
    Redis::set('name','张三');
      $name=Db::table('class')->get();
      Redis::set('name','$name');
      var_dump(Redis::get('name'));                                                                                              
                                                                           
    }

  public function index(){
    echo '1111';
  }  

    
}
   