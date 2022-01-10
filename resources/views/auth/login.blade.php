@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>LOGIN</title>
<!-- レスポンシブ対応読み込み -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- fonts読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- css読み込み -->
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
</head> 
<body>
<form method="POST" action="{{ route('login') }}">
@csrf
<table width="80%" height="100%" >
    <tr>
        <td>
            <h1>LOGIN</h1>
        </td>
    </tr>
    <tr>
        <td>
            <div>
            <label for="email">MAIL</label>
                <div class="col-md-6">
                    <input type="email" name="email" class="form_textbox" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div>
            <label for="password">PASS</label>
                <div class="col-md-6">
                <input type="password" name="password" class="form_textbox" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td> 
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">ログイン情報を記録</label>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>     
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="form_button">ログイン</button>
                </div>
            </div>
        </form>
        </td>
    <tr>
        <td>
            @if (Route::has('password.request'))
            <a  class="btnarrow4" href="{{ route('password.request') }}" style="margin-left: 63px;top: 18px;">
            パスワードを忘れてしまった方はこちら
            </a>
            @endif
            @endsection
        </td>
    </tr>
</table>
</body>
