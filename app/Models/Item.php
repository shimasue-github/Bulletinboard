<?php
//php artisan make:model Models/Item

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    //primekeyがID以外の時設定
    protected $primaryKey = 'bangou';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'img',
        'userbangou'
    ];
}
