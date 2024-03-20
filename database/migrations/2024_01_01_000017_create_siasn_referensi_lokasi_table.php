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
        Schema::create('siasn_referensi_lokasi', function (Blueprint $table) {
            $table->string('id', 42)->primary();
            $table->string('kanregId', 2);
            $table->string('lokasiId', 42);
            $table->string('nama');
            $table->string('cepatKode', 10);
            $table->string('jenis', 2);
            $table->string('jenisKabupaten', 4);
            $table->string('removalDate');
            $table->string('jenisDesa');
            $table->string('tanggalJorge');
            $table->string('mgrCepatKode', 10);
            $table->string('ibukota');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_lokasi');
    }
};
