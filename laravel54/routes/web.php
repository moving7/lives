<?php

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
    return view('index.index');
});
Route::get('/login', function () {
    return view('index.login');
});
Route::get('/register',function(){
	return view('index.register');
});
Route::get('/index',function(){
	return view('index.index');
});
Route::get('/info',function(){
	return view('info.info');
});
Route::get('/grade',function(){
	return view('info.grade');
});
Route::get('/message',function(){
	return view('info.message');
});
Route::get('/history',function(){
	return view('info.history');
});
Route::get('/noble',function(){
	return view('info.noble');
});
Route::get('/estate',function(){
	return view('info.estate');
});
Route::get('/cdkey',function(){
	return view('info.cdkey');
});
Route::get('/auth',function(){
	return view('info.auth');
});
// 路由的配置
route::get('/','IndexController@index');
route::get('/index','IndexController@index');
route::get('index/show','IndexController@show');
route::any("index/category",'IndexController@category');
route::get('login_do','IndexController@login_do');
route::get("regin",'IndexController@regin');
route::get('index/logout','IndexController@logout');
route::any('logout','IndexController@logout');
route::any("index/details",'IndexController@details');
route::get("/info",'InfoController@info');
route::get("/grade",'InfoController@grade');
route::get("/history",'InfoController@history');
route::get("/message",'InfoController@message');
route::get("/noble",'InfoController@noble');
route::get("/title",'InfoController@title');
route::get("/estate",'InfoController@estate');
route::get("/cdkey",'InfoController@cdkey');
route::get("/auth",'InfoController@auth');
route::get('/edit',"EditController@edit");
route::any('/edit_do',"EditController@edit_do");