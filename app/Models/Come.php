<?php
//コマンド(作成) php artisan make:model Models/Come

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Come extends Model
{
    use SoftDeletes;

    //primekeyがID以外の時設定
    protected $primaryKey = 'bangou';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'suredobangou',
        'name',
        'come',
    ];
}
