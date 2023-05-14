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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('nama_user');
            $table->date('tanggal_lahir');
            $table->text('alamat_user');
            $table->string('email_user')->unique();
            $table->enum('role_user', ['Admin', 'Warehouse Keeper', 'Pegawai']);
            $table->primary('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
