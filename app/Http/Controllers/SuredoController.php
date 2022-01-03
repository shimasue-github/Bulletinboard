<?php
//コマンド(作成) php artisan make:controller SuredoController
//デフォルトでブレードの{{ }}文はXSS攻撃を防ぐ htmlspecialchars関数を自動的。

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Suredo;
use App\Models\Come;
use App\Models\Hensin;
use Carbon\Carbon;
//削除 use App\Http\Controllers\DB;

class SuredoController extends Controller
{
  //セッション確認
  public function __construct(){
    $this->middleware('auth');
  }

  //スレッド作成
  public function sakusei(){
    return view('suredo.sakusei');
  }
  public function store(Request $request){
    $suredo = new Suredo;
    $suredo->fill($request->all())->save();
    
    $tuki=Carbon::now()->startOfMonth();

    $user=DB::table('users')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    $suredo=DB::table('suredos')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    return view('home',compact('user','suredo'));
  }

  //スレッド検索
  public function kensaku()
  {
    return view('suredo.kensaku');
  }
  public function kensakugo(Request $request)
  { 
    $word = $request['word'];     
    $query = Suredo::query();
     
    if (!empty($word)) {
    $query->where('taitoru', 'LIKE', "$word");    
    }
      
    $suredos = $query->get();
     
    return view('suredo.kensakugo', compact('word','suredos'));
  }

  //スレッド詳細
  public function syousai(Request $request)
  {     
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

  //コメントを表示
  public function syousaigo(Request $request)
  {
    //コメントをDBに保存
    $come = new Come;
    $come->fill($request->all())->save();

    //番号を取得しスレッドを表示  
    $bangou = $request['suredobangou'];
    $query = Suredo::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $suredos = $query->get();

    //番号を取得しコメントを表示
    $query = Come::query();
    if (!empty($bangou)) {
      $query->where('suredobangou', 'LIKE', "$bangou");   
    }
    $comes = $query->get();

    return view('suredo.syousaigo',compact('bangou','suredos','comes'));
  }

  //スレッド一覧
  public function itiran(Request $request){

  //番号を取得しスレッドを表示  
  $bangou = $request['bangou'];
  $query = Suredo::query();
  if (!empty($bangou)) {
  $query->where('name', 'LIKE', "$bangou");   
  }
  $suredos = $query->get();
 
  return view('suredo.itiran',compact('bangou','suredos'));
  }

  //スレッド編集
  public function hensyu(Request $request)
  {   
    $bangou = $request['bangou'];

    $query = Suredo::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $suredos = $query->get();

    return view('suredo.hensyu',compact('bangou','suredos'));
  }
  //スレッド編集完了画面
  public function hensyugo(Request $request){
    $bangou = $request['bangou'];
    $taitoru = $request['taitoru'];
    $name = $request['name'];
    $honbun = $request['honbun'];
    
    //取得したデータで更新
    $suredos = Suredo::where('bangou', $bangou)->get();

    foreach ($suredos as $suredo) {

    $suredo->taitoru = $taitoru;
    $suredo->honbun = $honbun;
    $suredo->save();
    }
    return view('suredo.hensyugo',compact('bangou','taitoru','name','honbun'));
  }
  //スレッド削除
  public function sakuzyo(Request $request)
  {
    $bangou = $request['bangou'];

    $query = Suredo::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $suredos = $query->get();
    return view('suredo.sakuzyo',compact('bangou','suredos'));
  }
  public function sakuzyosuru(Request $request){
    $bangou = $request['bangou'];
    $user = Suredo::find($bangou);
    $user->delete();

    $tuki=Carbon::now()->startOfMonth();
    $user=DB::table('users')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    $suredo=DB::table('suredos')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    return view('home',compact('user','suredo'));
  }

  //コメント編集
  public function comehensyu(Request $request)
  {
    $bangou = $request['bangou'];

    $query = Come::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $comes = $query->get();

    return view('suredo.comehensyu',compact('bangou','comes'));
  }
  //コメント更新完了画面
  public function comehensyugo(Request $request)
  {
    $bangou = $request['bangou'];
    $comento = $request['come'];
    
    //取得したデータで更新
    $comes = Come::where('bangou', $bangou)->get();

    foreach ($comes as $come) {

    $come->come = $comento;
    $come->save();
    }

    $tuki=Carbon::now()->startOfMonth();

    $user=DB::table('users')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    $suredo=DB::table('suredos')
      ->whereMonth('created_at', $tuki)
      ->get()->count();

    return view('home',compact('user','suredo'));
  }
  //コメント削除
  public function comesakuzyo(Request $request)
  {
  $bangou = $request['bangou'];

  $query = Come::query();
  if (!empty($bangou)) {
  $query->where('bangou', 'LIKE', "$bangou");   
  }
  $comes = $query->get();

  return view('suredo.comesakuzyo',compact('bangou','comes'));
  }
  //コメント削除完了
  public function comesakuzyogo(Request $request){
    $bangou = $request['bangou'];
    $myname = $request['myname'];
    $username = $request['username'];

    if( "$myname" == "$username"){
      $come = Come::find($bangou);
      $come->delete();
    }

    $tuki=Carbon::now()->startOfMonth();

    $user=DB::table('users')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    $suredo=DB::table('suredos')
      ->whereMonth('created_at', $tuki)
      ->get()->count();
    return view('home',compact('user','suredo'));
  }

  //コメント返信詳細
  public function comehensin(Request $request){
    $bangou = $request['bangou'];

    $query = Come::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $comes = $query->get();

        $query = Hensin::query();
     
    if (!empty($bangou)) {
    $query->where('comebangou', 'LIKE', "$bangou");    
    }
      
    $hensins = $query->get();

    return view('suredo.comehensin',compact('bangou','comes','hensins'));
  }
  public function comehensingo(Request $request){
    $hensin = new Hensin;
    $hensin->fill($request->all())->save();

    $bangou = $request['comebangou'];

    $query = Come::query();
    if (!empty($bangou)) {
    $query->where('bangou', 'LIKE', "$bangou");   
    }
    $comes = $query->get();
 
    $query = Hensin::query();
     
    if (!empty($bangou)) {
    $query->where('comebangou', 'LIKE', "$bangou");    
    }
      
    $hensins = $query->get();

    return view('suredo.comehensingo',compact('bangou','comes','hensins'));
  }
}