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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->integer('id_pembelian');
            $table->integer('nama_alat');
            $table->text('tanggal_pembelian')->nullable();
            $table->integer('vendor');
            $table->integer('harga_satuan');
            $table->integer('jumlah_pembelian');
            $table->text('keterangan');
            $table->enum('status', ['Belum konfirmasi','Konfirmasi untuk pembelian','Sedang dalam pemesanan', 'Barang datang', 'Barang masuk database']);
            $table->primary('id_pembelian');
            $table->foreign('nama_alat')->references('kode_nama_alat')->on('nama_alat');
            $table->foreign('vendor')->references('id_vendor')->on('vendors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
