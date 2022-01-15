@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <div>
    <p>登録が完了しました！</p>
  </div>  
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

<header class="line">
    登録が完了しました！ : WELCOME {{ Auth::user()->name}}さん
</header>


