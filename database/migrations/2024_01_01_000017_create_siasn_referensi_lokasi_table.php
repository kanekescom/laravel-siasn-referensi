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
            $table->string('kanreg_id')->nullable();
            $table->string('lokasi_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('kode_cepat')->nullable();
            $table->string('jenis')->nullable();
            $table->string('jenis_kabupaten')->nullable();
            $table->string('removal_date')->nullable();
            $table->string('jenis_desa')->nullable();
            $table->string('tanggal_jorge')->nullable();
            $table->string('kode_cepat_merger')->nullable();
            $table->string('ibu_kota')->nullable();
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