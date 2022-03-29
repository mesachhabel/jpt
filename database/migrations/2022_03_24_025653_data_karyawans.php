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
            $table->id();
            $table->integer('uploads_id');
            $table->string('nik');
            $table->string('nama');
            $table->string('nppi');
            $table->string('jk');
            $table->string('agama');
            $table->string('skk');
            $table->string('ia');
            $table->string('gi');
            $table->string('npwp');
            $table->string('nktp');
            $table->string('nbpkt');
            $table->string('nbpks');
            $table->string('tmk');
            $table->string('ska');
            $table->string('jabatan')->nullable();
            $table->string('gj')->nullable();
            $table->string('bg')->nullable();
            $table->string('as')->nullable();
            $table->string('uk')->nullable();
            $table->string('auk')->nullable();
            $table->string('so')->nullable();
            $table->string('bank')->nullable();
            $table->string('norek')->nullable();
            $table->string('an')->nullable();
            $table->boolean('ip');
            $table->string('sky')->nullable();
            $table->string('tb')->nullable();
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
