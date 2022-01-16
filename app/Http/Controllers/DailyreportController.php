<?php
//業務日報コントローラー
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dailyreport;

class DailyreportController extends Controller
{
  //セッション確認
  public function __construct(){
    $this->middleware('auth');
  }
  //業務日報作成
  public function sakusei(Request $request){
    $y = date('Y'); 
    $m = date('m'); 
    $d = date('d'); 
    $bangou = $y-$m-$d;
    $query = Dailyreport::query();
      if (!empty($bangou)) {
      $query->where('day', 'LIKE', "$bangou");   
      }
    $reports = $query->get();
    return view('dailyreport.sakusei', compact('reports','y','m','d'));
  }
  //業務日報保存
  public function store(Request $request){
    $report = new Dailyreport;
    $report->fill($request->all())->save();
    return view('home');
  }
  //指定ユーザー業務日報一覧
  public function itiran(Request $request){
    $name = $request['name'];
    $query = Dailyreport::query();
      if (!empty($name)) {
      $query->where('name', 'LIKE', "$name");   
      }
    $reports = $query->get();
    return view('dailyreport.itiran',compact('name','reports'));
    }
  //業務日報編集
  public function hensyu(Request $request){   
    $y = date('Y'); 
    $m = date('m'); 
    $d = date('d'); 
    $bangou = $request['bangou'];
    $query = Dailyreport::query();
      if (!empty($bangou)) {
      $query->where('bangou', 'LIKE', "$bangou");   
      }
    $reports = $query->get();
    return view('dailyreport.hensyu',compact('bangou','reports','y','m','d'));
  }
  //業務日報編集完了画面
  public function hensyugo(Request $request){
    $bangou = $request['bangou'];
    $allcontent = $request['allcontent'];
    //取得したデータで更新
    $reports = Dailyreport::where('bangou', $bangou)->get();
      foreach ($reports as $report) {
      $report->allcontent = $allcontent;
      $report->save();
      }
    return view('home',compact('bangou','allcontent'));
  }
  //削除確認
  public function sakuzyo(Request $request){
    $bangou = $request['bangou'];
    $query = Dailyreport::query();
      if (!empty($bangou)) {
      $query->where('bangou', 'LIKE', "$bangou");   
      }
    $reports = $query->get();
    return view('dailyreport.sakuzyo',compact('bangou','reports'));
  }
  //削除
  public function sakuzyosuru(Request $request){
    $bangou = $request['bangou'];
    $user = Dailyreport::find($bangou);
    $user->delete();
    return view('home');
  }
}
