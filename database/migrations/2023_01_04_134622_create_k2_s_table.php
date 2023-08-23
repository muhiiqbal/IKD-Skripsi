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
        Schema::create('k2_s', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->foreignId('ambil_id')->nullable();
            $table->date('penyerahan')->nullable();
            $table->date('tgl_serah')->nullable();
            $table->string('terlambat')->nullable();
            $table->string('total_serah')->nullable();
            $table->string('n2')->nullable();
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
        Schema::dropIfExists('k2_s');
    }
};
