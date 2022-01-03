<?php
//コマンド(作成) php artisan make:migration create_users_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    //テーブルの内容
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->comment('ユニークID');
            $table->string('name')->comment('名前');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('確認');
            $table->string('password')->comment('パスワード');
            $table->rememberToken()->comment('トークン');
            $table->timestamps();
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
//コマンド(実行) php artisan migrate
//$table->bigIncrements('id');から変更