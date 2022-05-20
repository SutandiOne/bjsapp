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
        Schema::create('klaims', function (Blueprint $table) {
            $table->year('tahun')->primary();
            $table->integer('rawat_inap_jiwa')->nullable();
            $table->integer('rawat_inap_s')->nullable();
            $table->integer('rawat_inap_s2')->nullable();
            $table->integer('rawat_inap_forecast')->nullable();
            $table->integer('rawat_jalan_jiwa')->nullable();
            $table->integer('rawat_jalan_s')->nullable();
            $table->integer('rawat_jalan_s2')->nullable();
            $table->integer('rawat_jalan_forecast')->nullable();
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
        Schema::dropIfExists('klaims');
    }
};
