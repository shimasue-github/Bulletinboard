<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKintaisTable extends Migration
{
    public function up()
    {
        Schema::create('kintais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('start');
            $table->date('end');
            $table->date('rest');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kintais');
    }
}
