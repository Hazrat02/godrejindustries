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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('profile')->nullable();
            $table->string('role')->default(1);
            $table->string('main_balance')->default(0);
            $table->string('live_balance')->default(0);
  
            $table->string('wallet')->nullable();
            $table->string('birth')->default(1000);
            $table->string('country')->nullable();
            $table->string('Phone')->nullable();
            $table->string('ad_kyc')->default('No');
            $table->string('id_kyc')->default('No');
            $table->string('ec_kyc')->default('No');
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
        Schema::dropIfExists('users');
    }
};
