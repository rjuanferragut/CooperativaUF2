<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderDetails', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('id_product');
          $table->unsignedBigInteger('id_order');
          $table->integer('quantity');
          $table->text('description');
          $table->timestamps();

          $table->foreign('id_product')->references('id')->on('products');
          $table->foreign('id_order')->references('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderDetails');
    }
}
