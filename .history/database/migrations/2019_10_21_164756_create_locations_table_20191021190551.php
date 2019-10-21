<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //id	city	state	country	zipcode	address

        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->integer('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('zipcode');
            $table->string('address');
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
        Schema::dropIfExists('locations');
    }
}
