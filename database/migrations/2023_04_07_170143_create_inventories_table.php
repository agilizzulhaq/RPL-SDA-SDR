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
        Schema::create('inventories', function (Blueprint $table) {
            $table->integer('kodeAlat');
            $table->integer('namaAlat');
            $table->integer('lokasiAlat');
            $table->enum('kondisiAlat', ['Layak', 'Tidak Layak']);
            $table->enum('statusAlat', ['Tersedia', 'Tidak Tersedia']);
            $table->primary('kodeAlat');
            $table->foreign('namaAlat')->references('kode_nama_alat')->on('nama_alat');
            $table->foreign('lokasiAlat')->references('kodeRuangan')->on('rooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
