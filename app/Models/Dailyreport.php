<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dailyreport extends Model
{
    //これがないと消える
    use SoftDeletes;
    //primekeyがID以外の時は設定
    protected $primaryKey = 'bangou';
    protected $dates = ['deleted_at'];

    //テーブル内の設定が必要なもの
    protected $fillable = [
        'name',
        'day',
        'start_time1',
        'start_time2',
        'start_time3',
        'start_time4',
        'start_time5',
        'end_time1',
        'end_time2',
        'end_time3',
        'end_time4',
        'end_time5',
        'content1',
        'content2',
        'content3',
        'content4',
        'content5',
        'allcontent',
    ];
}
