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
            $table->id();
            $table->integer('kodeRuangan');
            $table->enum('jenisRuangan', ['UGD', 'ICU', 'HCU', 'ICCU', 'NICU', 'PICU', 'Kamar Operasi', 'Kamar Perawatan', 'Klinik Rawat Jalan']);
            $table->string('namaRuangan');
            $table->text('lokasiRuangan');
            $table->enum('statusRuangan', ['Tersedia', 'Tidak Tersedia']);
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