<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOkinisTable extends Migration
{
    public function up()
    {
        Schema::create('okinis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('bangou');
            $table->string('name');
            $table->string('taitoru');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
      // ★ 下記のように修正
      Schema::table('okinis', function (Blueprint $table) {
        $table->dropSoftDeletes();
      });
    }
}
//コマンド(実行) php artisan migrate