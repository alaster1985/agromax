<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('status_id')->unsigned()->default(1);
            $table->integer('stage_id')->unsigned()->default(1);
            $table->integer('delivery_id')->unsigned();
            $table->integer('condition_id')->unsigned()->default(1);
            $table->integer('manager')->default(0);
            $table->integer('tons');
            $table->string('price', 100);
            $table->string('product_name', 100);
            $table->string('port', 100);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 100);
            $table->string('linkedin', 100);
            $table->string('phone', 100);
            $table->string('session_id', 100);
            $table->string('company', 100)->nullable();
            $table->boolean('exclusive');
            $table->boolean('isdeleted')->default(0);
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
        Schema::dropIfExists('order');
    }
}
