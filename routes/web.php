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
    return view('index');
});

Route::get('/reg', "Admin\TestController@reg");
Route::get('/test', "Admin\TestController@index");

Route::get('/msg', "MsgController@index");
Route::get('/msg/showaddview', "MsgController@showaddview");
Route::post('/msg/dopostmsg', "MsgController@dopostmsg");

Route::get('/msg/add', "MsgController@add");
Route::get('/msg/delete/{id}', "MsgController@delete");
Route::get('/msg/update/{id}', "MsgController@update");
Route::get('/msg/find', "MsgController@find");




Route::get('/user/showAddView', "UserController@showAddView");
Route::get('/user/showEditView', "UserController@showEditView");
Route::post('/user/add', "UserController@add");
Route::post('/user/edit', "UserController@edit");
Route::get('/user/delete', "UserController@delete");
Route::post('/user/update', "UserController@update");
Route::post('/user/info', "UserController@info");
Route::get('/user/list', "UserController@list");



// Route::get('/student/:stuId', function () {
//     return "student"  . $stuId;
// });


// Route::get('/', "UserController@index");
// Route::get('/getInfo', "UserController@getUserInfoById");
// Route::get('/student', "UserController@student");
// Route::get('/student/{studentId}', "UserController@studentId");
// Route::get('/teacher/{teacherId}', "UserController@teacherId");


