@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<p>コメント</p>
<table>
<form method="POST" action="{{route('Suredo.comehensingo')}}">@csrf
    <input type="hidden" name="comebangou" value="{{$bangou}}">
    <input type="hidden" name="name" value="{{ Auth::user()->name}}">
    <input type="text" name="come" class="text"  placeholder="COME" required autofocus>
    <input type="submit" class="whitebutton" value="コメントに返信">
</form>
</table>

<p>対象スレッド</p>
@if($comes->count())
<table class="table" width="80%">
    @foreach ($comes as $come)
    <input type="hidden" name="bangou" value="{{ $come->bangou }}">
    <tr class="tdtop"><td>{{ $come->name }}</td>
        <td class="td">{{ $come->come }}</td>
    </tr>
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
    <tr class="tdtop"><td>{{ $hensin->name }}</td>
                      <td class="td">{{ $hensin->come }}</td>
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
</header>