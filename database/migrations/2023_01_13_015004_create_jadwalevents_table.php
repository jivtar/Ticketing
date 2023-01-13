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
        Schema::create('jadwalevents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_event');
            $table->Integer('id_tempatduduk');
            $table->Integer('id_artis');
            $table->Integer('id_venue');
            $table->string('tanggal');
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
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
        Schema::dropIfExists('jadwalevents');
    }
};
