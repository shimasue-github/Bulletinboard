@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<form method="POST" action="{{ route('Suredo.hensyugo') }}">
  @csrf
  @if($suredos->count())
<table width="80%" height="80%" class="center">
    <input type="hidden" name="bangou" class="text" value="{{$bangou}}">
    @foreach ($suredos as $suredo)
    <tr><td>TITLE<br><input type="text" name="taitoru" class="in" value="{{ $suredo->taitoru }}" placeholder="TITLE" required autofocus></td></tr>   
    <tr><td>NAME<br><input type="text" name="name" class="in"  value="{{ $suredo->name }}" placeholder="NAME"required autofocus></td></tr> 
    <tr><td>HONBUN<br><input type=textarea name="honbun" class="in" cols="50" rows="10" value="{{ $suredo->honbun }}" placeholder="HONBUN" required autofocus></input></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" value="更新"></td></tr>
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
    この画面では記事編集できるよ！ : WELCOME {{ Auth::user()->name}}さん
</header>
</body>