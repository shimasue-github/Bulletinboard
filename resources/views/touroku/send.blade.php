@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Laravel send</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Modaal -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<style>
    table{
        text-align: center;
        height: 40px;
        margin-top:70% ;
        margin-left: auto;
        margin-right: auto;
    }
    .textbox{
        width : 80%;
    }
</style>
</head>
<body>
    <table width="100%">
        <tr>
            <td>
                <div class="logo"><img src="{{ asset('image/mail.png') }}" width=150px height=150px" style=" margin-top:-100px;"><br></div>
                <form method="GET" action="{{ route('sendgo') }}">
                @csrf
                <input type="text" name="mail" class="textbox">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="btn" value="仮登録メール送信">
                </form>
            </td>
        </tr>
    </table>
</body>