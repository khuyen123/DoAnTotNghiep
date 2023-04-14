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
        Schema::create('ve', function (Blueprint $table) {
            $table->id('id_ve');
            $table->string('tinhtrang');
            $table->string('hangGhe')->nullable();
            $table->string('soGhe')->nullable();
            $table->string('soBan')->nullable();
            $table->string('soCong')->nullable();
            $table->integer('thanhtoan');
            $table->integer('kiemtra');
            $table->unsignedBigInteger('id_nguoidung');
            $table->unsignedBigInteger('id_chitietsukien');
            $table->foreign('id_nguoidung')->references('id')->on('users')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign('id_chitietsukien')->references('id_chitietsukien')->on('chitietsukien')->onUpdate('restrict')->onDelete('cascade');
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
        Schema::dropIfExists('ve');
    }
};
