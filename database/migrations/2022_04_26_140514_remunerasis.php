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
        Schema::create('remunerasis', function (Blueprint $table){
            $table->id();
            $table->string('golongan');
            $table->string('kode');
            $table->string('jabatan');
            $table->bigInteger('tunj_jabatan');
            $table->bigInteger('tunj_umk');
            $table->bigInteger('tunj_transport');
            $table->bigInteger('tunj_proyek');
            $table->bigInteger('tunj_komunikasi');
            $table->bigInteger('tunj_pulsa');
            $table->bigInteger('tunj_utilitas');
            $table->bigInteger('tunj_perumahan');
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
        Schema::dropIfExists('remunerasis');
    }
};
