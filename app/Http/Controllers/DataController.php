<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
//数据库控制器
class DataController extends Controller
{
 // 展示页面
 public function index(){
  //连接数据 
  //或者直接使用根命名空间\Db::select('select * from abs');
  //查询数据
  //$data=Db::select('select * from abs');
   //dd($data);
   

   //删除数据
   //如果删除数据成功的话  返回影响行数
   //var_dump(Db::delete('delete from abs where id=11'));
   
   
   //增加数据
   //返回boolean(布尔值)  成功为true  失败为false
  // var_dump(Db::insert('insert into class values(21,2,11)'));
   

    //修改数据
    //返回值是影响行数
    //var_dump(Db::update('update users set name=22 '));
    

    //运行一段命令
    //创建数据库
   // Db::statement('create database yun');
    //删除数据库
   // Db::statement('drop database yun');
    }

    
    //事务机制
   // Db::beginTransaction();
    //删除id=1数据
   // $a=Db::delete('delete from users where id=1 ');
    //删除id=10数据
   /* $b=Db::delete('delete from users where id=10');
      if($a && $b){
        //提交事务
        Db::commit();
      }else{
         //回滚事务
        Db::rollback();
      }*/
}  
