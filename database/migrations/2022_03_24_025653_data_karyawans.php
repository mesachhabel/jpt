<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataKaryawans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawans', function (Blueprint $table) {
            $table->integer('nik')->primary();
            $table->string('nama');
            $table->string('nppi');
            $table->string('jk');
            $table->string('agama');
            $table->string('skk');
            $table->string('ia');
            $table->string('gi');
            $table->string('npwp');
            $table->integer('nktp');
            $table->integer('nbpkt');
            $table->integer('nbpks');
            $table->string('tmk');
            $table->string('ska');
            $table->string('jabatan');
            $table->string('klp');
            $table->bigInteger('sgp');
            $table->string('as')->nullable();
            $table->string('uk')->nullable();
            $table->string('auk')->nullable();
            $table->string('so')->nullable();
            $table->string('bank')->nullable();
            $table->string('norek')->nullable();
            $table->string('an')->nullable();
            $table->boolean('ip')->default(0);
            $table->string('sky')->nullable();
            $table->string('tb')->nullable();
            $table->string('image')->nullable();
            //Data Jasa Marga
            $table->string('nppin')->nullable();
            $table->string('goli')->nullable();
            $table->string('phdp')->nullable();
            $table->string('ujsm')->nullable();
            $table->string('phda')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('data_karyawans');
    }
}
