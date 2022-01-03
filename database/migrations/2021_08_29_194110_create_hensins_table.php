<?php
//コマンド(作成) php artisan make:migration create_hensins_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHensinsTable extends Migration
{
    //テーブルの内容
    public function up()
    {
        Schema::create('hensins', function (Blueprint $table) {
            $table->bigIncrements('bangou');
            $table->string('comebangou');
            $table->string('name');
            $table->string('come');
            $table->softDeletes();    
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('hensins', function (Blueprint $table) {
        $table->dropSoftDeletes();
      });
    }
}
//コマンド(実行) php artisan migrate