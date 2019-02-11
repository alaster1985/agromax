<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
        Schema::table('descriptions', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('language_id')->references('id')->on('languages');
        });
        Schema::table('lots', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('stage_id')->references('id')->on('stages');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key_relationships');
    }
}
