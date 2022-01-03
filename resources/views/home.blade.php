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

<table class="center" width="80%" height="70%">
   <tr>
   <td>
    <table class="kensaku">
        <tr><td><a href="{{ route('Suredo.sakusei') }}" class="toptext"><img src="../image/hane.png" class="image" alt="作成・編集・削除"></a></td></tr>
    </table>
    </td>

    <td>
    <table class="kensaku">
        <tr><td><form method="GET" action="{{ route('Suredo.kensakugo') }}">
                <input type="text" class="textblack" name="word" placeholder="word" required autofocus><br>
                <input type="submit" class="blackbutton" value="スレッド検索">
                </form></td></tr>
    </table>
    </td>
    
   <td>
    <table class="kensaku">
    <form method="GET" action="{{ route('Image.input') }}">
        <tr><td><input type="hidden" name="name" value="{{ Auth::user()->name}}">
                <input type="image" src="../image/hosi.png" class="image">
                </form></td></tr>
    </table>
    </td>

    </tr>
</table>

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
  今月会員数 : {{$user}} 今月投稿数 : {{$suredo}} : WELCOME {{ Auth::user()->name}}さん</p>
</header>