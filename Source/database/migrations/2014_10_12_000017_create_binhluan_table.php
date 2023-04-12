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
        Schema::create('binhluan', function (Blueprint $table) {
            $table->id('id_binhluan');
            $table->string('noidung');
            $table->timestamps();
            $table->unsignedBigInteger('id_sukien');
            $table->unsignedBigInteger('id_nguoidung');
            $table->foreign('id_sukien')->references('id_sukien')->on('sukien')->onDelete('cascade');
            $table->foreign('id_nguoidung')->references('id_nguoidung')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binhluan');
    }
};
