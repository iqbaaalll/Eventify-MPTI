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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggalMulai');
            $table->date('tanggalBerakhir');
            $table->time('jamMulai', $precision = 0);
            $table->time('jamBerakhir', $precision = 0);
            $table->string('lokasi');
            $table->integer('budget');
            $table->integer('kapasitas');
            $table->string('imagePath');
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
        Schema::dropIfExists('events');
    }
};
