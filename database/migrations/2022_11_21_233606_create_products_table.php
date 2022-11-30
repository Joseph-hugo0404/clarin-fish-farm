<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fish_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('stock_id')->unsigned();
            $table->string('fish_name');
            $table->foreign('fish_id')->references('id')->on('customers');
            $table->foreign('product_id')->references('id')->on('all_transaction');
            $table->foreign('stock_id')->references('id')->on('stock');
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
        Schema::dropIfExists('products');
    }
}
