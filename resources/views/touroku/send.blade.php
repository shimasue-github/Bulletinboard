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
    @media screen and (max-width: 480px){
        table{
            text-align: center;
            colo:#6fc8c293;
            height: 40px;
            margin-top:70% ;
            margin-left: auto;
            margin-right: auto;
        }

    }
    @media screen and (min-width: 481px){

        table{
            text-align: center;
            color:#6fc8c293;
            height: 40px;
            margin-top:330px ;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>
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