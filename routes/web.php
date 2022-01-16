<?php
//コマンド(ルート確認) php artisan list

//認証機能ルートまとめ Illuminate\Support\Facades\Auth.php
Auth::routes();

//サイトトップ画面
Route::get('/', function () {return view('welcome');});

//★★★HomeController

//HomeController ユーザートップ画面
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kintai', 'KintaiController@kintai')->name('kintai');

//★★★TourokuController

//TourokuController 仮登録画面
Route::get('/send', 'TourokuController@send')->name('send');
Route::get('/sendgo', 'TourokuController@sendgo')->name('sendgo');

//★★★SuredoController

//SuredoController スレッド作成画面
Route::get('/suredo/sakusei', 'SuredoController@sakusei')->name('Suredo.sakusei');
Route::post('/suredo/store', 'SuredoController@store')->name('Suredo.store');
//SuredoController スレッド更新画面
Route::get('/suredo/hensyu', 'SuredoController@hensyu')->name('Suredo.hensyu');
Route::post('/suredo/hensyugo', 'SuredoController@hensyugo')->name('Suredo.hensyugo');
//SuredoController スレッド削除画面
Route::get('/suredo/sakuzyo', 'SuredoController@sakuzyo')->name('Suredo.sakuzyo');
Route::get('/suredo/sakuzyosuru', 'SuredoController@sakuzyosuru')->name('Suredo.sakuzyosuru');
//SuredoController スレッド詳細
Route::get('/suredo/syousai', 'SuredoController@syousai')->name('Suredo.syousai');
Route::get('/suredo/syousaigo', 'SuredoController@syousaigo')->name('Suredo.syousaigo');
//SuredoController スレッド一覧
Route::get('/suredo/itiran', 'SuredoController@itiran')->name('Suredo.itiran');
//SuredoController 検索画面
Route::get('/suredo/kensakugo', 'SuredoController@kensakugo')->name('Suredo.kensakugo');

//SuredoController コメント更新画面
Route::get('/suredo/comehensyu', 'SuredoController@comehensyu')->name('Suredo.comehensyu');
Route::post('/suredo/comehensyugo', 'SuredoController@comehensyugo')->name('Suredo.comehensyugo');
//SuredoController コメント削除画面
Route::get('/suredo/comesakuzyo', 'SuredoController@comesakuzyo')->name('Suredo.comesakuzyo');
Route::get('/suredo/comesakuzyogo', 'SuredoController@comesakuzyogo')->name('Suredo.comesakuzyogo');
//SuredoController コメント返信画面
Route::get('/suredo/comehensin', 'SuredoController@comehensin')->name('Suredo.comehensin');
Route::post('/suredo/comehensingo', 'SuredoController@comehensingo')->name('Suredo.comehensingo');

//★★★ImageController

//画像添付機能
Route::get('/image/input', 'ImageController@input')->name('Image.input');
Route::post('/upload', 'ImageController@upload')->name('upload');;
Route::get('/output', 'ImageController@output')->name('output');;
//お気に入り機能
Route::get('/okini', 'ImageController@okini')->name('okini');
Route::get('/okinigo', 'ImageController@okinigo')->name('okinigo');
Route::get('/okiniiri', 'HomeController@okiniiri')->name('okiniiri');

//会社概要
Route::get('/overview', 'EtcController@overview')->name('overview');

