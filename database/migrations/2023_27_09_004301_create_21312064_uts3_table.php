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
        Schema::create('21312064_uts3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uts3_f1');
            $table->unsignedBigInteger('uts3_f2');
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
        Schema::dropIfExists('21312064_uts3');
    }
};
