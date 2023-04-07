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
        Schema::create('xuatchieu_ghengoi', function (Blueprint $table) {
            $table->id();
            $table->integer('tongsohang')->nullable();
            $table->integer('soghemoihang')->nullable();
            $table->integer('tongsoban')->nullable();
            $table->integer('tongsocong')->nullable();
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
        Schema::dropIfExists('xuatchieu_ghengoi');
    }
};
