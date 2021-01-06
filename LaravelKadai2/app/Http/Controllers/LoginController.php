<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// ログイン画面に遷移するコントローラ
class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
}
