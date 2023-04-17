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
            $table->id();
            $table->integer('kodeAlat');
            $table->string('namaAlat');
            $table->text('lokasiAlat');
            $table->integer('stok');
            $table->integer('limit');
            $table->enum('jenisAlat', ['Medis', 'Non-Medis']);
            $table->enum('pemakaianAlat', ['Reusable', 'Disposable']);
            $table->enum('kondisiAlat', ['Layak', 'Tidak Layak']);
            $table->enum('statusAlat', ['Tersedia', 'Tidak Tersedia']);
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
