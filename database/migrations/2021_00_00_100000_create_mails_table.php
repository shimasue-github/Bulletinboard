<?php
//コマンド(作成) php artisan make:migration create_mails_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('bangou');
            $table->string('mail');
            $table->string('_token');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
//コマンド(実行) php artisan migrate