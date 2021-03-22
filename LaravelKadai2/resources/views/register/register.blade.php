@extends('layouts.layout')

@section('title','ユーザー登録')




@section('content')
<!-- ユーザーの登録情報を入力するフォーム -->
<!-- エラーメッセージを追加 -->
<form method="POST" action="/register">
  <table>
    @if(count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    @csrf
    @error('username')
    <tr>
      <th>エラー</th>
      <td>{{$message}}</td>
    </tr>
    @enderror
    <tr>
      <th>UserName: </th>
      <td><input type="text" name="username" value="{{old('username')}}"></td>
    </tr>
    @error('email')
    <tr>
      <th>エラー</th>
      <td>{{$message}}</td>
    </tr>
    @enderror
    <tr>
      <th>Email: </th>
      <td><input type="text" name="emiail" value="{{old('email')}}"></td>
    </tr>
    @error('password')
    <tr>
      <th>エラー</th>
      <td>{{$message}}</td>
    </tr>
    @enderror
    <tr>
      <th>Password: </th>
      <td><input type="password" name="password" value="{{old('password')}}"></td>
    </tr>
    @error('password_confirmation')
    <tr>
      <th>エラー</th>
      <td>{{$message}}</td>
    </tr>
    @enderror
    <tr>
      <th>Password(確認): </th>
      <td><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"></td>
    </tr>
    <tr>
      <th>
        <input type="submit" value="登録">
      </th>
    </tr>
  </table>
</form>
@endsection