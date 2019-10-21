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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('dob')->nullable();
            $table->string('omang')->nullable();
            $table->string('passport')->nullable();
            $table->string('address')->nullable();
            $table->string('idType')->nullable();
            $table->string('email')->nullable();
            $table->string('cellphone')->unique();
            $table->boolean('isVerified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
