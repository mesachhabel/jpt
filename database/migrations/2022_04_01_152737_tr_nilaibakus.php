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
            $table->double('jkm');
            $table->double('jkk');
            $table->double('jht');
            $table->double('jpk');
            $table->double('bpjskes_prs');
            $table->double('bpjskes_peg');
            $table->double('jpp');
            $table->double('jpp_prs');
            $table->double('jpp_peg');
            $table->double('pajak_jamsostek');
            $table->double('jamsostek');
            $table->double('jams_prs');
            $table->double('jams_peg');
            $table->double('menit_telat');
            $table->double('hari_kerja');
            $table->double('purnajab_dir');
            $table->double('purna_karya');
            $table->double('dana_pensiun');
            $table->double('tarif_1');
            $table->double('tarif_2');
    
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
