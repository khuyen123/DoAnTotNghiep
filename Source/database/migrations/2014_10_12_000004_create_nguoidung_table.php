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
            $table->id('id_nguoidung');
            $table->string('tendangnhap');
            $table->string('matkhau');
            $table->string('email');
            $table->string('makichhoat')->nullable();
            $table->integer('trangthai');
            $table->integer('kichhoat');
            $table->string('hoten');
            $table->date('ngaySinh')->nullable();      
            $table->string('sdt')->nullable();          
            $table->string('gioiTinh')->nullable();
            $table->string('diachi')->nullable();
            $table->integer('quyentruycap');
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
