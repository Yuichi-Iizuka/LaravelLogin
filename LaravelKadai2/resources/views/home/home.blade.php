@extends('layouts.layout')

@section('title','ホーム')
@section('menubar')
<a href="#">ログアウト</a>
@endsection
@section('content')
<!-- ログイン後のホーム -->

<h1>{{$name}}さま</h1>
<h1>ログインしました！ </h1>
@endsection('content')