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
            $table->integer('kodeRuangan');
            $table->integer('namaPeminjam');
            $table->date('tanggalMasuk');
            $table->date('tanggalKeluar');
            $table->enum('statusRuangan', ['Tersedia', 'Tidak Tersedia']);
            $table->primary('kodeRuangan');
            $table->foreign('namaPeminjam')->references('id_user')->on('Penggunas');
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
