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

//基础路由
Route::get('/', function () {
    return view('welcome');
});

Route::get('login','AdminController@login');



//Route::get('/base1',function(){
//    return 'get';
//});
//
//Route::post('/base2',function(){
//   return 'post';
//});
//
////多请求路由
//Route::match(['get','post'],'multi1',function(){
//   return 'multi1';
//});
//
//Route::any('multi2',function(){
//    return 'multi2';
//});
////路由参数
//Route::get('user/{id}',function($id){
//    return 'User-id-'.$id;
//})->where('id','[0-9]+');
//
//Route::get('user/{name?}',function($name='shown'){
//    return 'User-name-'.$name;
//})->where('name','[A-Za-z]+');
//
//Route::get('user/{id}/{name?}',function($id,$name='shown'){
//    return 'User-id-'.$id.'-name-'.$name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
//
////路由别名,就是给路由一个代号而已
//Route::get('center/member-center',['as'=>'center',function(){
//    return route('center');
//}]);
//
////路由群组
//
//Route::group(['prefix'=>'member'],function(){
//    Route::get('center/member-center1',['as'=>'center',function(){
//        return route('center');
//    }]);
//    Route::get('center/member-center2',['as'=>'center',function(){
//        return 'member-center';
//    }]);
//    Route::get('info','MemberController@info');
//});
//
////路由中输出视图
//Route::get('hello',function(){
//    return view('welcome');
//});
//
////Route::get('member/info','MemberController@info');
////Route::get('member/info',['uses'=>'MemberController@info']);
//Route::get('member/detail/{id}',['uses'=>'MemberController@detail','as'=>'memberinfo']);