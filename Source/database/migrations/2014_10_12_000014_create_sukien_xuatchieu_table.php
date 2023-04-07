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
        Schema::create('sukien_xuatchieu', function (Blueprint $table) {
            $table->id();
            $table->date('batdau');
            $table->date('ketthuc');
            $table->string('diachi');
            $table->integer('sovetoida');
            $table->integer('sovedaban');
            $table->decimal('giave');
            $table->string('trangthai');
            $table->unsignedBigInteger('id_sukien');
            $table->unsignedBigInteger('id_xuatchieu_ghengoi');
            $table->foreign('id_sukien')->references('id')->on('sukien')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('id_xuatchieu_ghengoi')->references('id')->on('xuatchieu_ghengoi')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('sukien_xuatchieu');
    }
};
