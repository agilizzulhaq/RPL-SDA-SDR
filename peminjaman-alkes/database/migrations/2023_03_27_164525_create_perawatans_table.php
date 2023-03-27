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
            $table->char('kodealat', 10);
            $table->string('namaalat', 100);
            $table->string('lokasialat', 100);
            $table->string('jenisperawatan', 100);
            $table->string('catatanperawatan', 100);
            $table->dateTime('tanggalperawatan');
            $table->primary('kodealat');
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
