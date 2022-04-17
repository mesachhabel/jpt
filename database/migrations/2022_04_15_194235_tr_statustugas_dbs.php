<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TRStatusTugasDBS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tr_statustugas_dbs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('instansi');
            $table->string('bank');
            $table->string('norek');
            $table->string('atasnama');
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
        Schema::dropIfExists('tr_statustugas_dbs');
    }
};
