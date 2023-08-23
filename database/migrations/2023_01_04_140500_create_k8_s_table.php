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
        Schema::create('k8_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ambil_id')->nullable();
            $table->string('jumlah_dilaksanakan')->nullable();
            $table->string('jumlah_tdk')->nullable();
            $table->string('jumlah_jaga')->nullable();
            $table->string('jumlah_kedelapan')->nullable();
            $table->string('n8')->nullable();
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
        Schema::dropIfExists('k8_s');
    }
};
