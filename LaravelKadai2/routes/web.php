<?php

use Illuminate\Support\Facades\Route;
// フォームリクエストのルーティングを追加
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


// ログインコントローラへルーティング
Route::get('/login','LoginController@index');

// ユーザー登録コントローラへルーティング
Route::get('register','RegisterController@index');

// フォーム入力した後のルーティング
Route::post('/register','RegisterController@post');