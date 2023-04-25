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
        Schema::create('chitietsukien', function (Blueprint $table) {
            $table->id('id_chitietsukien');
            $table->dateTime('batdau');
            $table->dateTime('ketthuc');
            $table->string('diachi');
            $table->string('khuvuc');
            $table->integer('sovetoida');
            $table->integer('sovedaban');
            $table->integer('trangthai');
            $table->decimal('giave');
            $table->string('sdt_lienhe')->nullable();
            $table->string('ten_lienhe')->nullable();
            $table->integer('dotuoichophep');
            $table->string('mota',10000)->nullable();
            $table->unsignedBigInteger('id_sukien');
            $table->unsignedBigInteger('id_xaphuong');
            $table->foreign('id_xaphuong')->references('id_xaphuong')->on('xaphuong');
            $table->foreign('id_sukien')->references('id_sukien')->on('sukien')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('chitietsukien');
    }
};
