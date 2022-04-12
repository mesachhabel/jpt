<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TerimaPotongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('terima_potongs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bulan');
            $table->string('nik');
            $table->string('nama');
            $table->string('jabatan');
            //Data Penerimaan Potong
            $table->string('kode_penerimaan');
            $table->string('uraian_penerimaan');
            $table->string('jumlah_penerimaan');
            //Rincian Potongan Lain
            $table->string('kode_potongan');
            $table->string('uraian_potongan');
            $table->string('jumlah_potongan');
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
        schema::dropIfExists('terima_potongs');
    }
};
