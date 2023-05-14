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
            $table->integer('id_penjadwalan');
            $table->integer('kodeRuangan');
            $table->string('namaPeminjam', 50);
            $table->date('tanggalMasuk');
            $table->date('tanggalKeluar')->nullable();
            $table->enum('statusRuangan', ['Tersedia', 'Tidak Tersedia']);
            $table->primary('id_penjadwalan');
            $table->foreign('kodeRuangan')->references('kodeRuangan')->on('rooms');
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
