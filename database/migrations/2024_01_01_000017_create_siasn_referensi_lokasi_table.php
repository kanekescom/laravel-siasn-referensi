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
            $table->string('id')->primary();
            $table->string('kanregId')->nullable();
            $table->string('lokasiId')->nullable();
            $table->string('nama')->nullable();
            $table->string('cepatKode')->nullable();
            $table->string('jenis')->nullable();
            $table->string('jenisKabupaten')->nullable();
            $table->string('removalDate')->nullable();
            $table->string('jenisDesa')->nullable();
            $table->string('tanggalJorge')->nullable();
            $table->string('mgrCepatKode')->nullable();
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
