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
        Schema::create('k12_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ambil_id')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->time('waktu_masuk')->nullable();
            $table->time('waktu_keluar')->nullable();
            $table->time('waktu_masuk_bulat')->nullable();
            $table->time('waktu_keluar_bulat')->nullable();
            $table->time('waktu_total')->nullable();
            $table->string('jenis')->nullable();
            $table->string('total_tm')->nullable();
            $table->string('n12')->nullable();
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
        Schema::dropIfExists('k12_s');
    }
};
