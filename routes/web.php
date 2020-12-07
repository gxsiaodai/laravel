
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
 
});

Route::get('/user','App\Http\Controllers\IndexController@index');
Route::get('env',function(){
	var_dump(env('APP_DEBUG'));
	var_dump(env('DB_PASSWORD'));
});

Route::get('config',function(){
	var_dump(config('app.env'));
	dd(config('view.compiled'));
});

Route::get('yun','App\Http\Controllers\YunController@index');
Route::post('yun1','App\Http\Controllers\YunController@yun1');

Route::get('ma','App\Http\Controllers\YunController@ma');

Route::put('put','App\Http\Controllers\YunController@put');

//参数路由
Route::get('userll/{aa}/{bb}',function($aa,$bb){
       echo $aa;
       echo $bb;
	});
//参数路由默认值
Route::get('uss/shanchu/{id?}',function($id='好的'){
	echo $id;
});
//带参数访问控制器
Route::get('yunfeng/{aa}/{bb}','App\Http\Controllers\YunController@yunfeng');


//一个路由实现多种请求
Route::any('sss','App\Http\Controllers\YunController@index');


//资源路由
Route::resource('a','App\Http\Controllers\YunController');

//命名路由
Route::get('abc','App\Http\Controllers\YunController@abc')->name('one');

Route::get('xiao','App\Http\Controllers\YunController@xiao')->name('two');

//路由组
//通过路由组提取公共命名空间和公共前缀
Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin'],function(){
	//后台首页
	Route::get('/','IndexController@index');
	//后台用户管理模块
	Route::get('user','UserController@index');
	//后台商品管理模块
	Route::get('goods','GoodsController@index');


});
//通过路由组提取公共命名空间和公共前缀
Route::group(['namespace'=>'App\Http\Controllers\Home','prefix'=>'home'],function(){
	//前台首页
	Route::get('/','IndexController@index');
	//前台用户管理模块
	Route::get('user','UserController@index');
	//前台商品管理模块
	Route::get('goods','GoodsController@index');
	Route::get('fasong','FasongController@index');

});

  Route::get('login','App\Http\Controllers\Home\UserController@index');

  Route::get('db','App\HTTP\Controllers\DataController@index');

  Route::any('jieshou','App\Http\Controllers\Home\UserController@post');

//链接redis
 Route::get('redis','App\Http\Controllers\IndexController@redis');

 Route::post('post','App/Http/Controllers/Home/IndexController@post');