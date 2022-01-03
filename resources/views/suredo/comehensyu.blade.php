@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<form method="POST" action="{{ route('Suredo.comehensyugo')}}">
  @csrf    
  @if($comes->count())
<table width="80%" height="80%" class="center">
    <input type="hidden" name="bangou" class="text" value="{{$bangou}}">
    @foreach ($comes as $come)
    <input type="hidden" name="name" class="in"  value="{{ $come->name }}" placeholder="NAME" required autofocus>
    <tr><td>COME<br><input type="text" name="come" class="in" value="{{ $come->come }}" placeholder="COME" required autofocus></input></td></tr>
    <tr><td colspan="2"><input type="submit" value="更新"></td></tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
</form>

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
  コメント編集してください。 : WELCOME {{ Auth::user()->name}}さん
</header>