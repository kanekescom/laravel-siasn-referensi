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
            $table->string('kanregId', 2)->nullable();
            $table->string('lokasiId', 42)->nullable();
            $table->string('nama')->nullable();
            $table->string('cepatKode', 10)->nullable();
            $table->string('jenis', 2)->nullable();
            $table->string('jenisKabupaten', 4)->nullable();
            $table->string('removalDate')->nullable();
            $table->string('jenisDesa')->nullable();
            $table->string('tanggalJorge')->nullable();
            $table->string('mgrCepatKode', 10)->nullable();
            $table->string('ibukota')->nullable();
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
