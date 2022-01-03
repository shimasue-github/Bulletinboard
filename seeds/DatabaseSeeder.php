<?php
//seeder実行

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    //データベースに入れる実行
    public function run()
    {
        $this->call
        (
            [SuredoSeeder::class],
            [ComeSeeder::class]
        );
    }
}

//コマンド(実行) php artisan db:seed
//コマンド(単独実行) php artisan db:seed --class=UserSeeder

//タイムゾーン変更 config/app.php 'timezone' =>
//日本語に変更 config/app.php ‘faker_locale’ => うまく行かない