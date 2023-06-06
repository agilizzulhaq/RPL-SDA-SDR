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
        Schema::create('mahasiswa_alyzar', function (Blueprint $table) {
            // $table->id();
            $table->char('idstudents', 10);
            $table->string('fullname', 100);
            $table->enum('gender', ['M', 'F']);
            $table->string('address', 100);
            $table->string('email', 100);
            $table->char('phone', 20);
            $table->primary('idstudents');
            $table->string('nik');
            $table->string('prodi');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_alyzar');
    }
};
