<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrKodeUnitKerjas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_kodeunitkerjas', function (Blueprint $table) {
            $table->id();
            $table->string('kuk');
            $table->string('sub');
            $table->string('uuk');
            $table->string('ksu');
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
        Schema::dropIfExists('tr_kodeunitkerjas');
    }
};
