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

<h1>お気に入り</h1>

<table  class="center"width="95%" height="80%"><tr><td>
<table class="center" width="100%" height="80%">
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <tr><td><input type="file" class="whitebutton"  name="file"></td></tr>
        <tr><td><input type="submit" class="whitebutton" value="アップロード"></td></tr>
    </form>
</table>  
</td><td>  
@if($okinis->count())
<table class="table"  width="100%">
    @foreach ($okinis as $okini)
    <tr class="tdtop"><td>{{ $okini->bangou }}</td>
        <td class="td">{{ $okini->taitoru }}</td>
        <td class="td">{{ $okini->name }}</td>
        <td class="td"><form method="GET" action="{{ route('okinigo') }}">
                       <input type="hidden" name="bangou" value="{{ $okini->bangou }}">
                       <input type="submit" class="whitebutton" value="詳細"></form>  
        <td class="td"><form method="GET" action="{{ route('okini') }}">
                       <input type="hidden" name="bangou" value="{{ $okini->id }}">
                       <input type="submit" class="whitebutton" value="お気に入りから外す"></form>                 
    </tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif

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
   チェックしたお気に入りと写真アップ画面です。: WELCOME {{ Auth::user()->name}}さん
</header>