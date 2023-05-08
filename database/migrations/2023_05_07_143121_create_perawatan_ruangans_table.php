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
        Schema::create('perawatan_ruangans', function (Blueprint $table) {
            $table->id();
            $table->char('kodeRuangan',7);
            $table->string('namaRuangan',30);
            $table->string('lokasiRuangan',30);
            $table->enum('kondisi',['B','S','R']);
            $table->date('history');
            $table->enum('statusperawatan', ['Belum dirawat', 'Sedang dirawat', 'Selesai dirawat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatan_ruangans');
    }
};
