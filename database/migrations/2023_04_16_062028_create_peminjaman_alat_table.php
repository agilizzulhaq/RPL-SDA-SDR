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
            $table->char('kode_alat', 25);
            $table->string('nama_alat', 100);
            $table->string('nama_peminjam', 100);
            $table->dateTime('tanggal_peminjam');
            $table->enum('status_peminjaman', ['dipinjam','tersedia']);
            $table->string('alasan_peminjaman', 100);
            $table->primary('kode_alat');
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
