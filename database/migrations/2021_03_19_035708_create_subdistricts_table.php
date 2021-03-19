<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubdistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdistricts', function (Blueprint $table) {
            $table->integer('subdistrict_id');
            $table->integer('province_id');
            $table->string('province');
            $table->integer('city_id');
            $table->string('city');
            $table->string('type');
            $table->string('subdistrict_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subdistricts');
    }
}
