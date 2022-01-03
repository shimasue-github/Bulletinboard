<?php
//usersテーブルにサンプルの中身を入れる
//コマンド(作成) php artisan make:seeder ComeSeeder

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    //データベースに入れるデータの設定
    public function run()
    {
        DB::table('comes')->insert([
            'name' => Str::random(3),
            'come' => Str::random(10),
            'created_at' => new Datetime(),
            'updated_at' => new Datetime(),
        ]);
    }
}
//php artisan db:seed
//php artisan db:seed --class=ComesTableSeeder
