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
        Schema::create('hargatikets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('id_jadwal');
            $table->Integer('id_tempatduduk');
            $table->Integer('tiket_habis');
            $table->Integer('sisa_tiket');
            $table->Integer('harga');
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
        Schema::dropIfExists('hargatikets');
    }
};
