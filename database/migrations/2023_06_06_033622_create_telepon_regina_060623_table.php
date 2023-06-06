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
        Schema::create('telepon_regina_060623', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mahasiswa');
            $table->string('telepon');
            $table->timestamps();
            $table->foreign('mahasiswa')->references('id')->on('mahasiswa_regina_060623');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telepon_regina_060623');
    }
};
