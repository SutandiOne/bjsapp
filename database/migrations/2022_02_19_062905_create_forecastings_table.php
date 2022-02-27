<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * mutator
     * total_x, total_y, total_x2, total_xy, rumus_a, rumus_b, rumus_y
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('forecastings', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_mulai');
            $table->year('tahun_akhir');
            $table->year('tahun_ramalan');
            $table->string('kategori_rawat');
            $table->integer('jumlah_jiwa');
            $table->integer('jumlah_jiwa_diramal');

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
        Schema::dropIfExists('forecastings');
    }
};
