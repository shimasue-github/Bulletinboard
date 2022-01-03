<?php
//php artisan make:migration create_items_table

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('bangou');
            $table->string('userbangou');
            $table->string('img');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropSoftDeletes();
          });
    }
}
//php artisan migrate
