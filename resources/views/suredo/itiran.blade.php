@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
@if($suredos->count())
<table border="1" width="95%" class="center">
    <tr>
        <th>taitoru</th>
        <th>name</th>
        <th>honbun</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($suredos as $suredo)
    <tr>
        <td class="td">{{ $suredo->taitoru }}</td>
        <td class="td">{{ $suredo->name }}</td>
        <td class="td">{{ $suredo->honbun }}</td>
        <td class="td"><form method="GET" action="{{ route('Suredo.hensyu') }}">
                       <input type="hidden" name="bangou" value="{{ $suredo->bangou }}">
                       <input type="submit" class="whitebutton" value="編集"></form>    
        <td class="td"><form method="GET" action="{{ route('Suredo.sakuzyo') }}">
                       <input type="hidden" name="bangou" value="{{ $suredo->bangou }}">
                       <input type="submit" class="whitebutton" value="削除"></form>           
    </tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
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
 ここの画面では過去の投稿記事の編集・削除ができます。 : WELCOME {{ Auth::user()->name}}さん
</header>