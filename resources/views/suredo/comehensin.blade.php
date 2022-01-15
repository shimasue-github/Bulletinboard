@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">


<table border="1" class="center">
<form method="POST" action="{{route('Suredo.comehensingo')}}">@csrf
    <input type="hidden" name="comebangou" value="{{$bangou}}">
    <input type="hidden" name="name" value="{{ Auth::user()->name}}">
    <tr><td><input type="text" name="come" class="text"  placeholder="COME" required autofocus>
    <input type="submit" class="whitebutton" value="コメントに返信"><td><tr>
</form>
</table>


@if($comes->count())
<table class="table" width="80%">
    @foreach ($comes as $come)
    <input type="hidden" name="bangou" value="{{ $come->bangou }}">
    <tr><td class="comebun">{{ $come->name }}</td></tr>
    <tr><td class="comename">{{ $come->come }}</td></tr>
    </form>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif

<p>コメントに対するコメント一覧</p>
@if($comes->count())
<table class="table" width="80%">
    @foreach ($hensins as $hensin)
    <tr class="tdtop"><td class="comebun">{{ $hensin->name }}</td>
                      <td class="comename">{{ $hensin->come }}</td>
    </tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif

<a href="{{ route('home') }}"><input type="button" class="whitebutton" value="トップに戻る"></a>
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
  コメントを見る。 : WELCOME {{ Auth::user()->name}}さん
  <img src="../image/apple.png" width="100%" height="150px" alt="作成・編集・削除">
</header>