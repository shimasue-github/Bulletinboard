<?php
//コマンド(作成) php artisan make:migration create_suredos_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuredosTable extends Migration
{
    //テーブルの内容
    public function up()
    {
        Schema::create('suredos', function (Blueprint $table) {
            $table->bigIncrements('bangou')->comment('番号');
            $table->string('taitoru')->comment('タイトル');
            $table->string('mail')->comment('メール');
            $table->string('name')->comment('名前');
            $table->string('honbun')->comment('本文');
            $table->softDeletes()->comment('物理削除');
            $table->timestamps();
        });
    }

    public function down()
    {
      // ★ 下記のように修正
      Schema::table('suredos', function (Blueprint $table) {
        $table->dropSoftDeletes();
      });
    }
}
//コマンド(実行) php artisan migrate