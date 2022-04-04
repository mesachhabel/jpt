<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbsensiDataKaryawans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_data_karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bulan');
            $table->integer('nik');
            $table->integer('nama');
            $table->integer('telat');
            $table->integer('plgcpt');
            $table->integer('alpha');
            $table->integer('ijin');
            $table->integer('sakit');
            $table->integer('dnsluar');
            $table->integer('cuti');
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
        Schema::dropIfExists('absensi_data_karyawans');
    }
};
