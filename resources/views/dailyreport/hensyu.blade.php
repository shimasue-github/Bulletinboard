@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>業務日報更新</title>
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
</head>
<body>
<form method="POST" action="{{ route('Dailyreport.hensyugo') }}">
    @csrf
    <h5>{{ $y }}年{{ $m }}月{{ $d }}日  業務日報   {{ Auth::user()->name}}</h5> 
    @if($reports->count())
<table width="95%" height="auto">
    <input type="hidden" name="bangou" class="text" value="{{$bangou}}">
    @foreach ($reports as $report)
    <tr>
        <td colspan="3" class="textbox" id="layout">
            スケジュール
        </td>
    </tr>  
    <tr>
        <td colspan="1">
            <input type="time" name="start_time1" value="{{ $report->start_time1 }}" class="textbox"> ~ <input type="time" name="end_time1" value="{{ $report->end_time1 }}" class="textbox">
        </td>
        <td colspan="2">
            <input type="text" class="textbox" name="content1" value="{{ $report->content1 }}">
        </td>
    </tr> 
    <tr>
        <td colspan="1">
            <input type="time" name="start_time2" value="{{ $report->start_time1 }}" class="textbox"> ~ <input type="time" name="end_time1" value="{{ $report->end_time2 }}" class="textbox">
        </td>
        <td colspan="2">
            <input type="text" class="textbox" name="content1" value="{{ $report->content2 }}">
        </td>
    </tr> 
    <tr>
        <td colspan="1">
            <input type="time" name="start_time1" value="{{ $report->start_time3 }}" class="textbox"> ~ <input type="time" name="end_time1" value="{{ $report->end_time3 }}" class="textbox">
        </td>
        <td colspan="2">
            <input type="text" class="textbox" name="content1" value="{{ $report->content3 }}">
        </td>
    </tr> 
    <tr>
        <td colspan="1">
            <input type="time" name="start_time1" value="{{ $report->start_time4 }}" class="textbox"> ~ <input type="time" name="end_time1" value="{{ $report->end_time4 }}" class="textbox">
        </td>
        <td colspan="2">
            <input type="text" class="textbox" name="content1" value="{{ $report->content4 }}">
        </td>
    </tr> 
    <tr>
        <td colspan="1">
            <input type="time" name="start_time1" value="{{ $report->start_time5 }}" class="textbox"> ~ <input type="time" name="end_time1" value="{{ $report->end_time5 }}" class="textbox">
        </td>
        <td colspan="2">
            <input type="text" class="textbox" name="content1" value="{{ $report->content5 }}">
        </td>
    </tr> 
    <tr><td>業務内容<br><input name="allcontent"  class="textbox" cols="30" rows="10" value="{{ $report->allcontent }}" placeholder="HONBUN" required autofocus></input></td></tr>
    <tr><td colspan="2"><input type="submit" name="submit" class="button" value="更新"></td></tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
</form>
</body>