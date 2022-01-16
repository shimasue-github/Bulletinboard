@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>業務日報新規</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Styles -->
<style>
    table{
        margin-top:-12px; 
    }
    h5{
        margin-left:15px;
    }
    .nipou_textbox{
        background-color: transparent;
        color: #6fc8c2;
        border:1px #6fc8c2 solid;
        padding: 5px;  
        font-size: 18px;
        outline: none;
        width: 100% ;
    }
    #layout{
        background: #6fc8c2;
        color: white;
        height: 12px;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<body>
<table class="right" width="80%"">
    <tr>
        <td>
            <form method="GET" action="{{ route('Dailyreport.itiran') }}">
                <input type="hidden" name="name" value="{{ Auth::user()->name}}">
                <input type="submit" class="button" style="margin-left:200px;top:23px;" value="過去業務日報">
            </form>
        </tr>
    </td>
</table>
<table border="1" width="95%" height="auto">
    <form method="POST" action="{{route('Dailyreport.store')}}">
        @csrf
        <h5>{{ $y }}年{{ $m }}月{{ $d }}日  業務日報   {{ Auth::user()->name}}</h5> 
        <input type="hidden" name="day" value="{{ $y }}-{{ $m }}-{{ $d }}">   
        <input type="hidden" name="name" value="{{ Auth::user()->name}}"> 
        <tr>
            <td colspan="3" class="textbox" id="layout">
                スケジュール
            </td>
        </tr>  
        <tr>
            <td colspan="1">
                <input type="time" name="start_time1" value="10:00" class="textbox"> ~ <input type="time" name="end_time1" value="10:00" class="textbox">
            </td>
            <td colspan="2">
                <input type="text" class="textbox" name="content1">
            </td>
        </tr>    
        <tr>
            <td colspan="1">
                <input type="time" name="start_time2" value="10:00" class="textbox"> ~ <input type="time" name="end_time2" value="10:00" class="textbox">
            </td>
            <td colspan="2">
                <input type="text" class="textbox" name="content2">
            </td>
        </tr>  
        <tr>
            <td colspan="1">
                <input type="time" name="start_time3" value="10:00" class="textbox"> ~ <input type="time" name="end_time3" value="10:00" class="textbox">
            </td>
            <td colspan="2">
                <input type="text" class="textbox" name="content3">
            </td>
        </tr>  
        <tr>
            <td colspan="1">
                <input type="time" name="start_time4" value="10:00" class="textbox"> ~ <input type="time" name="end_time4" value="10:00" class="textbox">
            </td>
            <td colspan="2">
                <input type="text" class="textbox" name="content4">
            </td>
        </tr>  
        <tr>
            <td colspan="1">
                <input type="time" name="start_time5" value="10:00" class="textbox"> ~ <input type="time" name="end_time5" value="10:00" class="textbox">
            </td>
            <td colspan="2">
                <input type="text" class="textbox" name="content5">
            </td>
        </tr>  
        <tr>
            <td colspan="3" class="textbox" id="layout">
                業務内容
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <textarea name="allcontent" width="100%"class="textbox" cols="30" rows="10" value="【作業名】【進捗】" required autofocus></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button type="submit" class="button">登録</button>
            </td>
        </tr>
    </form>
</table>
</body>