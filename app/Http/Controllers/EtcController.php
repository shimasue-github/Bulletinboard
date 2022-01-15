<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtcController extends Controller
{
    //概要
    public function overview(){
        return view('overview');
      }
}
