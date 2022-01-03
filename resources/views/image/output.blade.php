@extends('layouts.app')

@section('content')
    <table class="center" width="95%" height="80%">
    @foreach ($user_images as $user_image)
        <tr><td><img src="{{ asset('storage/' . $user_image['file_name']) }}"></td></tr>  
    @endforeach
    </table>  

<a href="{{ route('home') }}"><input type="button" class="whitebutton" value="トップに戻る"></a>
    
@endsection

<header class="line">
  アルバムページです。 
</header>