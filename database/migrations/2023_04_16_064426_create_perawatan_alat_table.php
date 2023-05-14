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
            $table->integer('id_perawatan');
            $table->integer('kode_alat');
            $table->enum('jenis_perawatan', ['Perawatan rutin', 'Pembersihan alat', 'Perawatan kerusakan']);
            $table->enum('status_perawatan', ['Belum konfirmasi','Konfirmasi untuk perawatan','Sedang dalam perawatan', 'Perawatan selesai']);
            $table->dateTime('tanggal_perawatan')->nullable();
            $table->string('riwayat_perawatan', 255);
            $table->string('catatan_perawatan', 100);
            $table->primary('id_perawatan');
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
        Schema::dropIfExists('perawatan_alat');
    }
};
