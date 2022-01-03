@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Laravel login</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<form method="POST" action="{{ route('login') }}">
@csrf

<table width="90%" height="80%" class="center"><tr><td>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">MAIL</label>
        <div class="col-md-6">
            <input id="email" type="email" class="text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</td></tr><tr><td>
    <div class="form-group row">
        <label for="password">PASS</label>
        <div class="col-md-6">
            <input id="password" type="password" class="text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</td></tr><tr><td> 
    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">ログイン情報を記録</label>
            </div>
        </div>
    </div>
</td></tr><tr><td class="right">     
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="whitebutton">
                ログイン
            </button>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">パスワード変更</video></a>
            @endif
        </div>
    </div>
</form>
@endsection
</td></tr></table>

<header class="line">
    ログインしてね！ 
</header>
</body>
