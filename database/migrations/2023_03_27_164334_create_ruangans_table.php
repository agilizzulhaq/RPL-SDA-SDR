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
        Schema::create('ruangans', function (Blueprint $table) {
            //$table->id();
            $table->char('koderuangan',7);
            $table->string('namaruangan',30);
            $table->string('jenisruangan',15);
            $table->string('lokasi',15);
            $table->char('kapasitas');
            $table->enum('kondisi',['B','S','R']);
            $table->date('history');
            $table->string('status',30);
            $table->string('statusperawatan',30);
            $table->primary('koderuangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
