@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<h1 class="taitoru">記事削除</h1>
<p>以下の記事を本当に削除してよろしいですか？</p>

<form method="GET" action="{{ route('Suredo.sakuzyosuru') }}">
  @if($suredos->count())
<table>
    @foreach ($suredos as $suredo)
    <tr><td>タイトル</td><td><input type="text" name="taitoru" class="text" value="{{ $suredo->taitoru }}"></td></tr>
    <tr><td>番号</td><td><input type="text" name="bangou" class="text" value="{{$bangou}}"></td></tr>
    <tr><td>名前</td><td><input tppe="text" name="name" class="text" value="{{ $suredo->name }}"</td></tr>
    <tr><td>本文</td><td><input type="text" name="honbun" class="text" value="{{ $suredo->honbun }}"></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" value="削除"></td></tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
</form>

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
 以下の記事は削除してもよろしいですか？。 : WELCOME {{ Auth::user()->name}}さん
</header>