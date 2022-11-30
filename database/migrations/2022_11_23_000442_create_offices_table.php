<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('office_address');
            $table->string('office_phone');
            $table->bigInteger('staff_id')->unsigned();
            $table->bigInteger('office_id')->unsigned();
            $table->timestamps();
            $table->foreign('staff_id')->references('id')->on('users');
            $table->foreign('office_id')->references('id')->on('all_transaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
