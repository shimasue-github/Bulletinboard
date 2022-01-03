<?php
//suredosテーブルにサンプルの中身を入れる
//コマンド(作成) php artisan make:seeder SuredoSeeder

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SuredoSeeder extends Seeder
{
    //データベースに入れるデータの設定
    public function run()
    {
        DB::table('suredos')->insert([
            'taitoru' => Str::random(5),
            'name' => Str::random(3),
            'honbun' => Str::random(10),
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
        ]);
    }
}
//php artisan db:seed
//php artisan db:seed --class=SuredosTableSeeder
