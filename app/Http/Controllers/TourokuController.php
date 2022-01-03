<?php
//コマンド(作成) php artisan make:controller TourokuController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Mail\SendMail;
use App\Http\Controllers\DB;
//use Illuminate\Support\Facades\Mail;
use App\Http\Requests\KariFormRequest;


class TourokuController extends Controller
{

  //仮登録画面
  public function send(){
    return view('touroku.send');
  }
  public function sendgo(Request $request){
   //KariFormRequest $request

    //$contact = $request->all();
    
    //全部を確認出来る
    //dd($request->all());
    $mail = $request['mail']; 
    $token = 'abcdefghijk'; 

    \Mail::to($mail)
    ->send(new SendMail($mail,$token)); // 引数にリクエストデータを渡す

    return view('touroku.sendgo',compact('mail','token'));
  }
}
