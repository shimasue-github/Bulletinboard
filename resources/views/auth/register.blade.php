@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>登録ページ</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- css読み込み -->
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<style>
    table{
        text-align:center;
        margin-left: auto;
        margin-right: auto;
        margin-top:180px;
    }
    .button{
        margin-top:20px;
        width:199px;
    }
</style>
</hard>
<body>
    <table class="center">
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <tr>
                <td>
                    名前<br><input id="name" type="text" class="textbox" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>    
                    メールアドレス<br><input id="email" type="email" class="textbox" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>     
                    パスワード<br><input id="password" type="password" class="textbox" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>     
                パスワード確認<br><input id="password-confirm" type="password" class="textbox" name="password_confirmation" required autocomplete="new-password">
                </td>
            </tr>
            <tr>
                <td class="right">      
                    <button type="submit" class="button">登録</button>
                    @endsection
                </td>
            </tr>
        </form>
    </table> 
    </div>
</body>
