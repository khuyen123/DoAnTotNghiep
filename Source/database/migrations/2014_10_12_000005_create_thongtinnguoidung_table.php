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
        Schema::create('thongtinnguoidung', function (Blueprint $table) {
            $table->id();
            $table->string('hoten');
            $table->date('ngaySinh')->nullable();            
            $table->string('gioiTinh')->nullable();
            $table->string('diachi')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_nguoidung');
            $table->foreign('id_nguoidung')->references('id')->on('nguoidung')->onDelete('cascade')->onUpdate('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thongtinnguoidung');
    }
};
