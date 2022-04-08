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
            $table->integer('nik');
            $table->string('bulan');
            $table->string('year');
            $table->string('nama');
            $table->integer('telat')->default(0);
            $table->integer('plgcpt')->default(0);
            $table->integer('alpha')->default(0);
            $table->integer('ijin')->default(0);
            $table->integer('sakit')->default(0);
            $table->integer('dnsluar')->default(0);
            $table->integer('cuti')->default(0);
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
