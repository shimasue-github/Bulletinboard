<?php
//コマンド(作成) php artisan make:model Models/Suredo

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suredo extends Model
{
    //これがないと消える
    use SoftDeletes;

    //primekeyがID以外の時設定
    protected $primaryKey = 'bangou';
    protected $dates = ['deleted_at'];

    //テーブル内の設定が必要なもの
    protected $fillable = [
        'taitoru',
        'name',
        'honbun',
    ];
}
