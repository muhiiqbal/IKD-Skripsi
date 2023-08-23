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
        Schema::create('k7_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ambil_id')->nullable();
            $table->integer('jumlah_mhs')->nullable();
            $table->integer('jumlah_mhs_lulus')->nullable();
            $table->string('total_presentase')->nullable();
            $table->string('n7')->nullable();
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
        Schema::dropIfExists('k7_s');
    }
};
