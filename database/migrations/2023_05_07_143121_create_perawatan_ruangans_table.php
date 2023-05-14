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
            $table->integer('id_perawatan');
            $table->integer('kodeRuangan');
            $table->enum('kondisi',['B','S','R']);
            $table->date('history')->nullable();
            $table->enum('statusperawatan', ['Belum dirawat', 'Sedang dirawat', 'Selesai dirawat']);
            $table->primary('id_perawatan');
            $table->foreign('kodeRuangan')->references('kodeRuangan')->on('rooms');
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
