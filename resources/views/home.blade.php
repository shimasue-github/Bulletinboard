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
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
<style>
    body{
        background-color:#222121; 
    }
    .menu_bar{
        margin-top:100px;
    }
    .kensaku_textbox{
    background-color: transparent;
    border:1px solid #222121; ;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 5px;
    appearance: none;
    border:1px #c3d825 solid;
    width: 309px;
    height: 50px;
    font-size: 18px;
}
.kensaku_button{
    background-color:#222121; 
    color: #fff;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 5px;
    appearance: none;
    border:1px #c3d825 solid;
    width: 320px;
    height: 50px;
</style>
</head>
<body>
<div class="openbtn"><span></span><span></span><span></span></div>
<nav id="g-nav">
    <table width=100% class="menu_bar">
        <tr>
            <td>
                <form method="GET" action="{{ route('Suredo.kensakugo') }}">
                    <input type="text" class="kenseku_textbox" name="word" required autofocus><br>
                    <input type="submit" class="kensaku_button" value="スレッド検索">
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('Suredo.sakusei') }}">新規記事作成</a>  
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('Image.input') }}">マイページ</a>   
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('Image.input') }}">概要</a>   
            </td>
    </table>   
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--自作のJS-->
<script>
    $(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});
</script>

<!-- <div class="container">
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
</div> -->
@endsection

<!-- <header class="line">
  今月会員数 : {{$user}} 今月投稿数 : {{$suredo}} : WELCOME {{ Auth::user()->name}}さん</p>
</header> -->

</body>