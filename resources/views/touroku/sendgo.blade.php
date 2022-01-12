@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>THANK</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/all.css') }}">
<style>
    table{
    text-align: center;
    color:#c3d825;
    height: 40px;
    margin-top:70% ;
    margin-left: auto;
    margin-right: auto;
    }
</style>
<!-- css読み込み -->
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</hard>
<body>
    <table>
        <p>メールを送信しました。</p>
    </table>
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
</body>

