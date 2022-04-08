<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trnilaibakus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_nilaibakus', function (Blueprint $table){
            $table->id();
            $table->string('st_peg');
            $table->string('st_tugas');
            $table->string('jkm');
            $table->string('jkk');
            $table->string('jht');
            $table->string('jht_prs');
            $table->string('jht_peg');
            $table->string('jpk');
            $table->string('jpk_prs');
            $table->string('jpk_peg');
            $table->string('jpp');
            $table->string('jpp_prs');
            $table->string('jpp_peg');
            $table->string('pajak_jamsostek');
            $table->string('jamsostek');
            $table->string('jams_prs');
            $table->string('jams_peg');
            $table->string('menit_telat');
            $table->string('hari_kerja');
            $table->string('purnajab_dir');
            $table->string('purna_karya');
            $table->string('dana_pensiun');
            $table->string('tarif_1');
            $table->string('tarif_2');
    
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
        Schema::dropIfExists('nilaibakus');
    }
};
