<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Request as PostRequest;



// 登録画面に遷移するコントローラー
class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }
    // postメソッド追加
    public function post(RegisterRequest $request)
    {
        $post_data = PostRequest::all();
        return view('home.home',compact('post_data'));
    }
}
