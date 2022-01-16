<?php

//認証機能
Auth::routes();

//トップ画面・ユーザートップ画面
Route::get('/', function () {return view('welcome');});
Route::get('/home', 'HomeController@index')->name('home');

//業務日報  作成・編集・削除
Route::get('/dailyreport/sakusei', 'DailyreportController@sakusei')->name('Dailyreport.sakusei');
Route::post('/dailyreport/store', 'DailyreportController@store')->name('Dailyreport.store');
Route::get('/dailyreport/itiran', 'DailyreportController@itiran')->name('Dailyreport.itiran');
Route::get('/dailyreport/hensyu', 'DailyreportController@hensyu')->name('Dailyreport.hensyu');
Route::post('/dailyreport/hensyugo', 'DailyreportController@hensyugo')->name('Dailyreport.hensyugo');
Route::get('/dailyreport/sakuzyo', 'DailyreportController@sakuzyo')->name('Dailyreport.sakuzyo');
Route::get('/dailyreport/sakuzyosuru', 'DailyreportController@sakuzyosuru')->name('Dailyreport.sakuzyosuru');

//勤怠
Route::get('/kintai', 'KintaiController@kintai')->name('kintai');


//★★★TourokuController

//TourokuController 仮登録画面
Route::get('/send', 'TourokuController@send')->name('send');
Route::get('/sendgo', 'TourokuController@sendgo')->name('sendgo');

//★★★SuredoController

//SuredoController スレッド詳細
Route::get('/suredo/syousai', 'SuredoController@syousai')->name('Suredo.syousai');
Route::get('/suredo/syousaigo', 'SuredoController@syousaigo')->name('Suredo.syousaigo');
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

