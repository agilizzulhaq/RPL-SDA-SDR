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
        Schema::create('penjadwalan_ruangans', function (Blueprint $table) {
            $table->id();
            $table->char('kodeRuangan',7);
            $table->string('namaRuangan',30);
            $table->enum('jenisRuangan', ['UGD', 'ICU', 'HCU', 'ICCU', 'NICU', 'PICU', 'Kamar Operasi', 'Kamar Perawatan', 'Klinik Rawat Jalan']);
            $table->string('lokasiRuangan',30);
            $table->integer('kapasitas');
            $table->enum('statusRuangan', ['Tersedia', 'Tidak Tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjadwalan_ruangans');
    }
};
