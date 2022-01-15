@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>業務日報</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Styles -->
<style>
    table{
        margin-left: auto;
        margin-right: auto;
    }
    .nipou_textbox{
        background-color: transparent;
        color: #6fc8c2;
        border:1px #6fc8c2 solid;
        padding: 5px;  
        font-size: 18px;
        outline: none;
        width: 100% ;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<body>
<table class="right" width="80%">
    <tr><td><form method="GET" action="{{ route('Suredo.itiran') }}">
        <input type="hidden" name="bangou" value="{{ Auth::user()->name}}">
        <input type="submit" class="btn" value="過去業務日報確認">
    </form></tr></td>
</table>
<table width="90%" height="80%" class="center">
    <form method="POST" action="{{route('Suredo.store')}}">@csrf
            <input type="hidden" name="name" value="{{ $y }}-{{ $m }}-{{ $d }}">
            <tr><td>タイトル<br><input type="text" name="taitoru" class="nipou_textbox"  value="{{ $y }}年{{ $m }}月{{ $d }}日 業務報告書" placeholder="TITLE" required autofocus></td></tr>        
            <tr><td>名前<br><input type="text" name="name" class="nipou_textbox" value="{{ Auth::user()->name}}" placeholder="NAME"required autofocus></td></tr>        
            <tr><td>業務内容<br><textarea name="honbun" class="textbox" cols="30" rows="10" value="【作業名】【進捗】" required autofocus></textarea></td></tr>
        <tr><td colspan="2"><button type="submit" class="btn">登録</button></td></tr>
    </form>
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

</body>