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
        Schema::create('perawatans', function (Blueprint $table) {
            $table->char('kode_alat', 25);
            $table->char('id_admin', 25);
            $table->char('id_keeper', 25);
            $table->char('id_user', 25);
            $table->string('nama_alat', 100);
            $table->string('lokasi_alat', 100);
            $table->string('jenis_perawatan', 100);
            $table->string('status_perawatan', 100);
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
        Schema::dropIfExists('perawatans');
    }
};
