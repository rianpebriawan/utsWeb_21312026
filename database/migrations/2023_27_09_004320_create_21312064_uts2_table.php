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
        Schema::create('21312064_uts2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uts2_f1');
            $table->unsignedBigInteger('uts2_f2');
            $table->unsignedBigInteger('uts2_f3');
            $table->unsignedBigInteger('uts2_f4');
            $table->unsignedBigInteger('id_uts1');
            $table->unsignedBigInteger('id_uts3');
            $table->foreign('id_uts1')->references('id')->on('21312064_uts1');
            $table->foreign('id_uts3')->references('id')->on('21312064_uts3');
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
        Schema::dropIfExists('21312064_uts2');
    }
};
