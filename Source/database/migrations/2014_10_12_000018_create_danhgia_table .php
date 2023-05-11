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
        Schema::create('danhgia', function (Blueprint $table) {
            $table->id();
            $table->double('sosao');
            $table->unsignedBigInteger('id_chitietsukien');
            $table->unsignedBigInteger('id_nguoidung');
            $table->foreign('id_chitietsukien')->references('id')->on('chitietsukien')->onDelete('cascade');
            $table->foreign('id_nguoidung')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('danhgia');
    }
};
