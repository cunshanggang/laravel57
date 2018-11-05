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
    return view('welcome');
});

Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});

Route::get('/user', 'UsersController@index');
//留言
Route::get('/message', 'MessagesController@index');
//添加留言
Route::post('/message/add', 'MessagesController@add');