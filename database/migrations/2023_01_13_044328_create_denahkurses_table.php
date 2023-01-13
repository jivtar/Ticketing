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
        Schema::create('denahkurses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zona_kursi');
            $table->Integer('kapasitas');
            $table->Integer('id_venue');
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
        Schema::dropIfExists('denahkurses');
    }
};
