<?php
//コマンド(作成) php artisan make:controller HomeController

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\User;
use App\Models\Come;
use App\Models\Suredo;
use App\Models\Okini;
use App\Models\Item;

class HomeController extends Controller
{
  //session確認
  public function __construct(){
    $this->middleware('auth');
  }

  //ユーザーホーム画面
  public function index(){

    //usersテーブルから特定のカウント $user = User::where('id', 1)->count();
    //suredosテーブルから特定のカウント $suredo = Suredo::where('bangou',2)->count();

    //今月の月取得 use Carbon\Carbon;
    $tuki=Carbon::now()->startOfMonth();

    //users今月の会員数
    $user=DB::table('users')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    //suredos今月の投稿数
    $suredo=DB::table('suredos')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    return view('home',compact('user','suredo'));
  }
  public function mypage(){
    return view('mypage.mypage');
  } 
  //ユーザーホーム画面 画像登録・表示
  public function hozon(Request $request){
    $file = $request->file('img');
    if(!empty($file)){
      $filename=$file->getClientOriginalName();
      $move=$file->move('../uplode/', $filename);
    }else{
      $filename="";
    }
  }
  public function okiniiri(Request $request){

    $okini = new Okini;
    $okini->fill($request->all())->save();

    $bangou = $request['bangou']; 
        
    $query = Suredo::query();
    if(!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $suredos = $query->get();
    $query = Come::query();
    if(!empty($bangou)) {
    $query->where('suredobangou', 'LIKE', "$bangou");   
    }
    $comes = $query->get();

    return view('suredo.syousai',compact('bangou','suredos','comes'));
  }  
}


