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
        Schema::create('csvimports', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('nama');
            $table->integer('k_satu');
            $table->integer('k_dua');
            $table->integer('k_tiga');
            $table->integer('k_empat');
            $table->integer('k_lima');
            $table->integer('k_enam');
            $table->integer('k_tuju');
            $table->integer('k_delapan');
            $table->integer('k_sembilan');
            $table->integer('k_sepuluh');
            $table->integer('k_sebelas');
            $table->integer('k_duabelas');
            $table->integer('k_tigabelas');
            $table->integer('k_empatbelas');
            $table->integer('rata_rata');
            $table->integer('keterangan');
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
        Schema::dropIfExists('csvimports');
    }
};
