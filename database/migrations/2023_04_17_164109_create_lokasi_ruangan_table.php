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
        Schema::create('LokasiRuangan', function (Blueprint $table) {
            $table->integer('kode_lokasi_ruangan');
            $table->string('lokasi_ruangan');
            $table->primary('kode_lokasi_ruangan');
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
        Schema::dropIfExists('LokasiRuangan');
    }
};
