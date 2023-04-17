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
        Schema::create('perawatan_alat', function (Blueprint $table) {
            $table->char('kode_alat', 25);
            $table->string('nama_alat', 100);
            $table->string('lokasi_alat', 100);
            $table->enum('jenis_perawatan', ['Perawatan rutin', 'Pembersihan alat', 'Perawatan kerusakan']);
            $table->enum('status_perawatan', ['Belum konfirmasi','Konfirmasi untuk perawatan','Sedang dalam perawatan', 'Perawatan selesai']);
            $table->string('riwayat_perawatan', 255);
            $table->string('catatan_perawatan', 100);
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
        Schema::dropIfExists('perawatan_alat');
    }
};
