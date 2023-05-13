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
        Schema::create('nama_alat', function (Blueprint $table) {
            $table->integer('kode_nama_alat');
            $table->string('nama_alat');
            $table->integer('stok');
            $table->integer('limit');
            $table->enum('satuan', ['Unit', 'Set', 'Dus', 'Lusin', 'Kg']);
            $table->enum('jenis_alat', ['Medis', 'Non-Medis']);
            $table->enum('pemakaian_alat', ['Reusable', 'Disposable']);
            $table->primary('kode_nama_alat');
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
        Schema::dropIfExists('nama_alat');
    }
};
