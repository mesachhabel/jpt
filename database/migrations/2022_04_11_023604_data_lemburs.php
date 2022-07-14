<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataLemburs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('data_lemburs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bulan');
            $table->string('nik');
            $table->string('nama');
            $table->string('ska');
            $table->string('npp');
            // Input Detail Jam Lembur
            $table->string('tanggal_lembur');
            $table->integer('jumlah_jam_lembur');
            $table->integer('jenis_hari_lembur');
            // Input Data Insentif
            $table->integer('jumlah_insentif');
            $table->integer('nilai_insentif');
            $table->integer('total_insentif');
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
        Schema::dropIfExists('data_lemburs');
    }
};
