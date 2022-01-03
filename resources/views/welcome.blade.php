<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Laravel top</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<!-- Styles -->
<style>
html, body {
    background-image:url(../image/ringotop.png);
    color: white;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
}
p{
    margin-left:30px;
}
.full-height {
    height: 100vh;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
.position-ref {
    position: relative;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}
.content {
    text-align: center;
}
.title {
    font-size: 84px;
}
.links > a {
    color: white;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}
.m-b-md {
    margin-bottom: 30px;
}
</style>

</head>
<body>
  <nav class="flex-center position-ref full-height">
    @if (Route::has('login'))
      <div class="top-right links">
          @auth
          <a href="{{ url('/home') }}">マイページ</a>
          @else
          <a href="{{ route('login') }}">ログイン</a>
          @if (Route::has('register'))
          <a href="{{ url('/send') }}">新規会員登録</a>
          @endif
          @endauth
      </div>
          @endif
      <div class="title m-b-md">
          WELCOME
      </div>
  </nav>
</body>
</html>
