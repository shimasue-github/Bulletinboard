@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <div>
    <p>以下の内容で更新が完了しました！</p>

<table>
    <tr><td>タイトル</td><td class="text">{{ $taitoru }}</td></tr>
    <tr><td>番号</td><td class="text">{{ $bangou }}</td></tr>
    <tr><td>名前</td><td class="text">{{ $name }}</td></tr>
    <tr><td>本文</td><td class="text">{{ $honbun }}</td></tr>

</table>


  <a href="{{ route('home') }}" class="button">トップに戻る</a>

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