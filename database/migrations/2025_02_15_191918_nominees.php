<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominees', function (Blueprint $table) {


            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('user_id');

            $table->string('Phone')->nullable();

            $table->string('id_font')->default('No');
            $table->string('id_back')->default('No');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('postal')->nullable();
            $table->string('file')->nullable();
            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');


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
        Schema::dropIfExists('nominees');
    }
};
