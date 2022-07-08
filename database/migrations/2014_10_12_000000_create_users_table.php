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
            $table->id('user_id');
            $table->string('name');
            $table->string('nipnim')->unique();
            $table->string('email')->unique();
            $table->string('notelp');
            $table->string('kk');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('hp_number')->nullable();
            $table->string('category_kk')->nullable();
            $table->string('password');
            $table->boolean('isAdmin')->default(0);
            $table->boolean('status')->default(0);
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
