<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trkodejabatans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_kodejabatans', function (Blueprint $table){
            $table->id();
            $table->string('kode');
            $table->string('golongan');
            $table->string('uraianjabatan');
            $table->string('sebutanjabatan');
            $table->string('klp');
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
        Schema::dropIfExists('tr_kodejabatans');
    }
};
