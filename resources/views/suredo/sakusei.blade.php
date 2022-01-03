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

<body>
<table class="right" width="80%">
    <tr><td><form method="GET" action="{{ route('Suredo.itiran') }}">
        <input type="hidden" name="bangou" value="{{ Auth::user()->name}}">
        <input type="submit" class="whitebutton" value="過去記事">
    </form></tr></td>
</table>

<table width="80%" height="80%" class="center">
    <form method="POST" action="{{route('Suredo.store')}}">@csrf
            <tr><td>TITLE<br><input type="text" name="taitoru" class="in" placeholder="TITLE" required autofocus></td></tr>        
            <tr><td>NAME<br><input type="text" name="name" class="in"  value="{{ Auth::user()->name}}" placeholder="NAME"required autofocus></td></tr>        
            <tr><td>HONBUN<br><textarea name="honbun" class="in" cols="50" rows="10" placeholder="HONBUN" required autofocus></textarea></td></tr>
        <tr><td colspan="2"><button type="submit" class="whitebutton">POST</button></td></tr>
    </form>
</table>

<a href="{{ route('home') }}"><input type="button" class="button" value="トップに戻る"></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<header class="line">
    この画面では記事作成できるよ！ : WELCOME {{ Auth::user()->name}}さん
</header>
</body>