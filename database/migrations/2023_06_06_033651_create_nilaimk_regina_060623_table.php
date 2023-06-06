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
        Schema::create('nilaimk_regina_060623', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa');
            $table->unsignedBigInteger('matkul');
            $table->integer('nilai');
            $table->timestamps();
            $table->foreign('mahasiswa')->references('id')->on('mahasiswa_regina_060623');
            $table->foreign('matkul')->references('id')->on('matkul_regina_060623');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilaimk_regina_060623');
    }
};
