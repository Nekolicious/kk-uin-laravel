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
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('artikel_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->text('header')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedInteger('kategori_id');
            $table->timestamps();

            $table->foreign('author_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
};
