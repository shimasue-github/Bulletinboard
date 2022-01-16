@extends('layouts.app')
@extends('layouts.bar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<style>
    table{
        margin-top: 55px;
    }
    th{
        background-color: #6fc8c2;
        color: white;
        border-radius: 1px;
    }
    td{
        background: rgba(117, 156, 153, 0.219);
    }
    form{
        margin-top: -5px;
        margin-bottom: -5px;
    }
</style>
@if($reports->count())
<table width="90%">
    <tr>
        <th width="70%">日付</th>
        <th width="10%">編集</th>
        <th width="10%">削除</th>
    </tr>
    @foreach ($reports as $report)
    <tr>
        <td class="td">{{ $report->day }}</td>
        <td class="td"><form method="GET" action="{{ route('Dailyreport.hensyu') }}">
                    <input type="hidden" name="bangou" value="{{ $report->bangou }}">
                    <input type="submit" class="button" value="作成"></form>    
        <td class="td"><form method="GET" action="{{ route('Dailyreport.sakuzyo') }}">
                    <input type="hidden" name="bangou" value="{{ $report->bangou }}">
                    <input type="submit" class="button" value="削除"></form>           
    </tr>
    @endforeach
</table>
@else
<p>見つかりませんでした。</p>
@endif
</body>