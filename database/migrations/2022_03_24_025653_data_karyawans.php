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
            //Relations
                //relastionship from table remunerasi_id (data_karyawans) to id (data_remunerasi)
                $table->unsignedBigInteger('remunarasi_id')->on('remunerasis')->references('id');
                //relastionship from table tr_nilaibaku_id (data_karyawans) to id (tr_nilaibaku)
                $table->unsignedBigInteger('nilaibaku_id')->on('tr_nilaibakus')->references('id');
            //End of Relations
            
            $table->string('nik')->primary();
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
            $table->string('klp');
            $table->string('kelas');
            $table->bigInteger('sgp');
            $table->string('uk')->nullable();
            $table->string('suk')->nullable();
            $table->string('bank');
            $table->integer('norek');
            $table->string('an');
            $table->boolean('ip')->default(0);
            $table->boolean('is')->default(0);
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
