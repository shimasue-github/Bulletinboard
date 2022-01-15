@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>業務日報更新</title>
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
</head>
<body>
<form method="POST" action="{{ route('Suredo.hensyugo') }}">
  @csrf
  @if($suredos->count())
<table width="90%" height="80%">
    <input type="hidden" name="bangou" class="text" value="{{$bangou}}">
    @foreach ($suredos as $suredo)
    <tr><td>タイトル<br><input type="text" name="taitoru" class="nipou_textbox" value="{{ $suredo->taitoru }}" placeholder="TITLE" required autofocus></td></tr>   
    <tr><td>氏名<br><input type="text" name="name" class="nipou_textbox"  value="{{ $suredo->name }}" placeholder="NAME"required autofocus></td></tr> 
    <tr><td>業務内容<br><input name="honbun"  class="textbox" cols="30" rows="10" value="{{ $suredo->honbun }}" placeholder="HONBUN" required autofocus></input></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" class="btn">更新</td></tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
</form>

</body>