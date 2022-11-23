<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearlyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearly', function (Blueprint $table) {
            $table->id();
            $table->Integer('tilapia');
            $table->Integer('ornamental');
            $table->Integer('carp');
            $table->Integer('beetle_fish');
            $table->Integer('cat_fish');
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
        Schema::dropIfExists('yearlies');
    }
}
