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
        Schema::create('master_nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('ambil_id');
            $table->string('n1')->nullable();
            $table->string('n2')->nullable();
            $table->string('n3')->nullable();
            $table->string('n4')->nullable();
            $table->string('n5')->nullable();
            $table->string('n6')->nullable();
            $table->string('n7')->nullable();
            $table->string('n8')->nullable();
            $table->string('n9')->nullable();
            $table->string('n10')->nullable();
            $table->string('n11')->nullable();
            $table->string('n12')->nullable();
            $table->string('n13')->nullable();
            $table->string('n14')->nullable();
            $table->string('rata')->nullable();
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
        Schema::dropIfExists('master_nilais');
    }
};
