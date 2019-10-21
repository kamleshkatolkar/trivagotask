<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //name	rating	category	location	image	reputation	reputationBadge	price	availability

        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('rating');
            $table->string('category')->nullable();
            $table->integer('location')->nullable();
            $table->string('image')->nullable();
            $table->integer('reputation')->nullable();
            $table->string('reputationBadge')->nullable();
            $table->integer('price')->nullable();
            $table->integer('availability')->nullable();
            $table->boolean('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('hotels');
    }
}
