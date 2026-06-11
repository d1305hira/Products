@extends('layouts.common')

@section('css')
 <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="container">
  <h2>ログイン</h2>

  <form method="post" action="/login">
    @csrf
  
    <div class="form-group">
      <div class="mail_confirm">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" value="{{old('email')}}">
        @error('email')
        {{$message}}
        @enderror
      </div>
      <div class="pass_confirm">
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password">
        @error('password')
        {{$message}}
        @enderror
      </div>
  
      <div class="login_btn">
        <button type="submit" class="login_btn">ログイン</button>
      </div>
    </div>
  </form>
</div>    
@endsection