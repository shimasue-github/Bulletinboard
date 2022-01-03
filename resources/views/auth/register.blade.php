@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Laravel mypage</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<table class="center" width="90%" height="90%"><tr><td>
    <form method="POST" action="{{ route('register') }}">
    @csrf
    名前<br><input id="name" type="text" class="text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</td></tr><tr><td>    
    メールアドレス<br><input id="email" type="email" class="text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</td></tr><tr><td>     
    パスワード<br><input id="password" type="password" class="text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</td></tr><tr><td>     
    パスワード確認<br><input id="password-confirm" type="password" class="text" name="password_confirmation" required autocomplete="new-password">
</td></tr><tr><td class="right">      
    <button type="submit" class="whitebutton">登録</button>
</form>
@endsection
</td></tr><tr><td></table> 

<header class="line">
    登録してね！
</header>
