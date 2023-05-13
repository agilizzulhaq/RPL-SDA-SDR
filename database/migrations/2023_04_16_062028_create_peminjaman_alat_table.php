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
        Schema::create('peminjaman_alat', function (Blueprint $table) {
            $table->integer('id_peminjaman');
            $table->integer('kode_alat');
            $table->string('nama_peminjam', 100);
            $table->dateTime('tanggal_peminjaman');
            $table->dateTime('tanggal_pengembalian')->nullable();
            $table->enum('status_peminjaman', ['dipinjam','dikembalikan']);
            $table->string('alasan_peminjaman', 100);
            $table->primary('id_peminjaman');
            $table->foreign('kode_alat')->references('kodeAlat')->on('inventories');
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
        Schema::dropIfExists('peminjaman_alat');
    }
};
