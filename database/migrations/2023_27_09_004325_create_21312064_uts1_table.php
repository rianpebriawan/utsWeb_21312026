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
        Schema::create('21312064_uts1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uts1_f1');
            $table->unsignedBigInteger('uts1_f2');
            $table->unsignedBigInteger('uts1_f3');
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
        Schema::dropIfExists('21312064_uts1');
    }
};
