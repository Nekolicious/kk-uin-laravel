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
            $table->unsignedInteger('kk_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->nullable();
            $table->boolean('is_approve')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('kk_id')->references('kk_id')->on('kk')->onDelete('cascade');
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
