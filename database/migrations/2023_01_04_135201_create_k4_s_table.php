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
        Schema::create('k4_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ambil_id')->nullable();
            $table->string('total_ajar')->nullable();
            $table->string('n4')->nullable();
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
        Schema::dropIfExists('k4_s');
    }
};
