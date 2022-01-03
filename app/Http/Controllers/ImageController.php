<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

use App\Models\Okini;

class ImageController extends Controller
{

    //画像をアップロードするページ
    public function input(Request $request)
    {    
        //名前を取得
        $name = $request['name'];  

        $query = Okini::query();
        if (!empty($name)) {
        $query->where('username', 'LIKE', "$name");    
        }
        $okinis = $query->get();
         
        return view('image.input', compact('name','okinis'));
    }
    //画像を保存したり画像名をDBに格納する部分
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');

            $file_name = basename($path);
            $user_id = Auth::id();
            $new_image_data = new Image();
            $new_image_data->user_id = $user_id;
            $new_image_data->file_name = $file_name;

            $new_image_data->save();

            return redirect('/output');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }

    //保存
    public function output() {
        $user_id = Auth::id();
        $user_images = Image::whereUser_id($user_id)->get();
        return view('image.output', ['user_images' => $user_images]);
    }
    public function okini(Request $request){

        $bangou = $request['bangou'];
        
        $okini = Okini::find($bangou);
        $okini->delete();

        $tuki=Carbon::now()->startOfMonth();
    
        $user=DB::table('users')
          ->whereMonth('created_at', $tuki)
          ->get()->count();
        $suredo=DB::table('suredos')
          ->whereMonth('created_at', $tuki)
          ->get()->count();
        return view('home',compact('user','suredo'));
    }  
    public function okinigo(Request $request){  
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
