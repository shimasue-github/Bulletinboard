@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
<style>
.okini{
    background-color:white;
    color: black;
    padding:10px;
    outline:none;
    border-radius: 5px;
    border:none;
    cursor:pointer;
    appearance:none;
}
.okiniPink{
    background-color:yellow;
    color: black;
    padding:10px;
    outline:none;
    border-radius: 5px;
    border:none;
    cursor:pointer;
    appearance:none;
}
</style>


<table  width="100%"class="center"><tr><td>
  @if($suredos->count())
  <table width="95%"class="white">
    @foreach ($suredos as $suredo)
    <form method="GET" action="{{ route('okiniiri') }}">
    <input type="hidden" name="username" value="{{ Auth::user()->name}}">
    <tr><td class="left">title : </td></tr>
    <tr><td class="in"><input type="text" name="taitoru" value="{{ $suredo->taitoru }}"></td><br></tr> 
    <tr><td class="left">name : </td></tr>
    <tr><td class="in"><input type="text" name="name" value="{{ $suredo->name }}"></td><br></tr> 
    <tr><td class="left">honbun : </td></tr>
    <tr><td class="in"><input type="text" name="bangou" value="{{ $suredo->bangou }}"></td></tr> 
    <tr><td class="left"></td></tr>
    <tr><td align="right"><input type="submit" class="okini" id="okini" value="お気に入りする" onclick="changeColor('target');">
    </form> 
    @endforeach 
    @else
    <p>エラーです。</p>
    @endif 
  </table>
</td>
<td rowspan="2">
@if($comes->count())
  <table width="95%"class="white">
    @foreach ($comes as $come)
    <tr><td class="comebun">{{ $come->name }}</td>        
        <td class="td" rowspan="2"><form method="GET" action="{{ route('Suredo.comehensyu') }}">
        <input type="hidden" name="bangou" value="{{ $come->bangou }}">
        <input type="submit" class="whitebutton" value="編集"></form></td>

        <td class="td" rowspan="2"><form method="GET" action="{{ route('Suredo.comesakuzyo') }}">
        <input type="hidden" name="username" value="{{ $come->name}}">
        <input type="hidden" name="myname" value="{{ Auth::user()->name}}">
        <input type="hidden" name="bangou" value="{{ $come->bangou }}">
        <input type="submit" class="whitebutton" value="削除"></form></td>

        <td class="td" rowspan="2"><form method="GET" action="{{ route('Suredo.comehensin') }}">
        <input type="hidden" name="bangou" value="{{ $come->bangou }}">
        <input type="submit" class="whitebutton" value="返信"></form></td></tr>                  
    <tr><td class="comename">{{ $come->come }}</td></tr>
     <tr><td colspan="4">-----------</td></tr>
    @endforeach
    @else
    <p>コメントはまだないよ！</p>
    @endif
  </table>
</td></tr>
<tr><td>
  <form method="GET" action="{{ route('Suredo.syousaigo') }}">
    <input type="hidden" name="suredobangou" value="{{$bangou}}">
    <input type="hidden" name="name" value="{{ Auth::user()->name}}">
    <input type="text" name="come" class="text"  placeholder="come" required autofocus>
    <input type="submit" class="whitebutton" value="コメント投稿">
  </form>
</td></tr></table>

<a href="{{ route('home') }}"><input type="button" value="トップに戻る"></a>
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
{{ $suredo->taitoru }} の記事です。 : WELCOME {{ Auth::user()->name}}さん
</header>