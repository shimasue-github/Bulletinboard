@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>会社概要</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<style>
    table{
        margin-left:auto;
        margin-right:auto;
        margin: top 200px;;
    }
</style>
</hard>
<body>
    <table width=90% height=90%> 
        <tr>
            <td>
                代表者 
            </td>
            <td>
                嶋末麻衣
            </td>
        </tr>
        <tr>
            <td>
                本社所在地
            </td>
            <td>
                〒000-0000<br>
                東京都
            </td>
        </tr>
        <tr>
            <td>
                電話番号
            </td>
            <td>
                000-0000-0000
            </td>
        </tr>
        <tr>
            <td colspan="2" height=250px>
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyD1zNWgJl_FnKu6bG6MxTYLUopTJp3bsZM&language=ja"></script>

                <style>
                #map { height: 100%; width: 100%}
                </style>
                </head>
                
                <body>
                <div id="map"></div>
                
                <script>
                var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
                var Options = {
                 zoom: 14,      //地図の縮尺値
                 center: MyLatLng,    //地図の中心座標
                 mapTypeId: 'roadmap'   //地図の種類
                };
                var map = new google.maps.Map(document.getElementById('map'), Options);
                </script>
            </td>
        </tr>
    </table>
    <a href="{{ route('home') }}">トップに戻る</a>   
</body>