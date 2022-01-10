<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>WELCOME</title>
<!-- レスポンシブ対応読み込み -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- fonts読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<!-- css読み込み -->
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div id="field">
        <div id="particles-js"></div>
        <div id="wrapper">
            <div id="field_text"></div>
        </div>
    </div>
    <main>
        <div id="container">
            <p><a href="{{ route('login') }}" class="btn welcome"><span>ログイン</span></a></p>
            <p><a href="{{ url('/send') }}" class="btn welcome"><span>新規会員登録</span></a></p>
        </div>
    </main>
</div>
<!-- particle.js -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!-- Jquery読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- progressbar.js読み込み -->
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
<!-- javascript読み込み -->
<script src="{{ asset('/js/welcome.js') }}"></script>
</body>
</html>
