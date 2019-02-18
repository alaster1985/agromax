<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExclusiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusive_lots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('product_name', 100);
            $table->integer('delivery_id')->unsigned();
            $table->integer('condition_id')->unsigned();
            $table->integer('tons');
            $table->integer('optional_price');
            $table->integer('max_price');
            $table->string('port', 100);
            $table->string('session_id', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exlusive_lots');
    }
}
