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
        Schema::create('mahasiswa_regina_060623', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('prodi');
            $table->enum('jk', ['laki-laki','perempuan']);
            $table->enum('agama', ['islam','kristen', 'katholik', 'buddha', 'konghuchu', 'hindu']);
            $table->bigInteger('nik')->unique();
            $table->unsignedBigInteger('tempatlahir');
            $table->date('tanggallahir');
            $table->timestamps();
            $table->foreign('prodi')->references('id')->on('prodi_regina_060623');
            $table->foreign('tempatlahir')->references('id')->on('tempatlahir_regina_060623');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_regina_060623');
    }
};
