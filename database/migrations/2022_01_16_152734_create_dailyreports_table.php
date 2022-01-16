<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyreports', function (Blueprint $table) {
            $table->bigIncrements('bangou');
            $table->string('name')->comment('氏名');
            $table->string('day')->comment('日報日付');
            $table->string('start_time1')->comment('タスク開始時間1');
            $table->string('start_time2')->comment('タスク開始時間2');
            $table->string('start_time3')->comment('タスク開始時間3');
            $table->string('start_time4')->comment('タスク開始時間4');
            $table->string('start_time5')->comment('タスク開始時間5');
            $table->string('end_time1')->comment('タスク終了時間1');
            $table->string('end_time2')->comment('タスク終了時間2');
            $table->string('end_time3')->comment('タスク終了時間3');
            $table->string('end_time4')->comment('タスク終了時間4');
            $table->string('end_time5')->comment('タスク終了時間5');
            $table->string('content1')->comment('タスク内容1');
            $table->string('content2')->comment('タスク内容2');
            $table->string('content3')->comment('タスク内容3');
            $table->string('content4')->comment('タスク内容4');
            $table->string('content5')->comment('タスク内容5');
            $table->string('allcontent')->comment('業務内容');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dailyreports');
    }
}
