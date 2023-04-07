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
            $table->id();
            $table->string('sdtlienhe');
            $table->string('tennguoilienhe');
            $table->integer('kichthuocsukien');
            $table->integer('dotuoichophep');
            $table->string('mota')->nullable();
            $table->unsignedBigInteger('id_sukien');
            $table->foreign('id_sukien')->references('id')->on('sukien')->onUpdate('restrict')->onDelete('cascade');
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
