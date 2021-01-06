@extends('layouts.layout')

@section('title','ログイン')

@sectino('menubar')
<a href="{{action('LoginController@index')}}">ログイン</a>
<a href="{{action('RegisterController@index')}}">ユーザ登録</a>
@endsection

@section('content')
<!-- ログイン情報入力フォーム -->
<form method="POST" action="#">
  @csrf
  <p>Email:<input type="text" name="email"></p><br>
  <p>Password:<input type="password" name="password"></p><br>
  <p><input type="submit" value="ログイン"></p>

</form>
@endsection('content')