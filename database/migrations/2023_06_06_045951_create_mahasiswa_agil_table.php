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
        Schema::create('mahasiswa_agil', function (Blueprint $table) {
            $table->char('IDMahasiswa', 10)->primary();
            $table->string('Nama', 50);
            $table->enum('Jenis_Kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('Prodi', 30);
            $table->string('Jurusan', 30);
            $table->string('Email', 50);
            $table->date('Tanggal_Lahir');
            $table->enum('Agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']);
            $table->char('NIK', 16);
            $table->char('Telepon', 13);
            $table->text('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_agil');
    }
};