<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TRSkalaGajis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tr_skalagajis', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('jabatan');
            $table->integer('min');
            $table->integer('mid');
            $table->integer('max');
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
        Schema::dropIfExists('tr_skalagajis');
    }
};
