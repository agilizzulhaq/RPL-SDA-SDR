<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('kodeRuangan');
            $table->enum('jenisRuangan', ['UGD', 'ICU', 'HCU', 'ICCU', 'NICU', 'PICU', 'Kamar Operasi', 'Kamar Perawatan', 'Klinik Rawat Jalan']);
            $table->string('namaRuangan');
            $table->integer('lokasiRuangan');
            $table->integer('kapasitas');
            $table->enum('statusRuangan', ['Tersedia', 'Tidak Tersedia']);
            $table->primary('kodeRuangan');
            $table->foreign('lokasiRuangan')->references('kode_lokasi')->on('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};