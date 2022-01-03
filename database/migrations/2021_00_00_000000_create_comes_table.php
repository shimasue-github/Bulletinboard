<?php
//コマンド(作成) php artisan make:migration create_comes_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComesTable extends Migration
{
    //テーブルの内容
    public function up()
    {
        Schema::create('comes', function (Blueprint $table) {
            $table->bigIncrements('bangou');
            $table->string('suredobangou');
            $table->string('name');
            $table->string('come');
            $table->softDeletes();    
            $table->timestamps();
        });
    }

    public function down()
    {
        //Schema::dropIfExists('comes');
        // ★ 下記のように修正
        Schema::table('comes', function (Blueprint $table) {
        $table->dropSoftDeletes();
      });
    }
}
//コマンド(実行) php artisan migrate