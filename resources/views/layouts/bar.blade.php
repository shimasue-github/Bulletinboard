<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<title>メニューバー</title>
</head>
<body>
<div class="openbtn"><span></span><span></span><span></span></div>
<nav id="g-nav">
    <table width=70% class="menu_bar">
{{-- <p>{{ Auth::user()->name}}さんがログインしています。</p> --}}
        <tr>
            <td colspan="3" height="40px">
                <form method="GET" action="{{ route('Suredo.kensakugo') }}">
                    <input type="date" class="nav_textbox" name="word" required autofocus>
                    <input type="submit" class="nav_button" value="日報検索">
                </form>
            </td>     
        </tr>
        <tr>
            <td class="menubutton">
                <a href="{{ route('Suredo.sakusei') }}"><span class="menubutton">日報業務</span></a>  
            </td>
            <td class="menubutton">
                <a href="{{ route('Image.input') }}"><span class="menubutton">設定</span></a> 
            </td>
            <td class="menubutton">
                <a href="{{ route('overview') }}"><span class="menubutton">会社概要</span></a>   
            </td>
        </tr>
    </table>   
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--自作のJS-->
<script>
    $(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});
</script>
</body>
</html>