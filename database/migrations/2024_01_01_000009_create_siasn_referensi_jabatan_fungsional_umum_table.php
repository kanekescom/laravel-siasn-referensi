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
        Schema::create('siasn_referensi_jabatan_fungsional_umum', function (Blueprint $table) {
            $table->string('id', 42)->primary();
            $table->string('nama')->nullable();
            $table->string('cepat_kode')->nullable();
            $table->string('wajib_ganti_tertentu')->nullable();
            $table->string('mgr_cepat_kode')->nullable();
            $table->string('nama_asli')->nullable();
            $table->string('kode_menpan')->nullable();
            $table->string('instansi_id')->nullable();
            $table->string('status')->nullable();
            $table->string('asal_peraturan_id')->nullable();
            $table->unsignedInteger('jfu_urusan_pemerintahan')->nullable();
            $table->string('jenis_jabatan_umum_id')->nullable();
            $table->string('jenis_jabatan_umum_nama')->nullable();
            $table->string('asn_jenjang_jabatan_id')->nullable();
            $table->string('asn_jenjang_jabatan_nama')->nullable();
            $table->string('level')->nullable();
            $table->string('ref_urusan_pemerintahan_id')->nullable();
            $table->string('ref_urusan_pemerintahan_nama')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_jabatan_fungsional_umum');
    }
};
