<?php
//コマンド(作成) php artisan make:model Models/Okini

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Okini extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'username',
        'bangou',
        'name',
        'taitoru',
    ];
}
