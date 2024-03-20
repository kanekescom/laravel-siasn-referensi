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
            $table->string('cepat_kode', 10)->nullable();
            $table->string('wajib_ganti_tertentu', 1)->nullable();
            $table->string('mgr_cepat_kode', 10)->nullable();
            $table->string('nama_asli')->nullable();
            $table->string('kode_menpan', 16)->nullable();
            $table->string('instansi_id', 42)->nullable();
            $table->string('status', 1)->nullable();
            $table->boolean('asal_peraturan_id')->nullable();
            $table->unsignedInteger('jfu_urusan_pemerintahan')->nullable()->autoIncrement(false);
            $table->unsignedTinyInteger('jenis_jabatan_umum_id')->nullable();
            $table->string('jenis_jabatan_umum_nama')->nullable();
            $table->string('asn_jenjang_jabatan_id')->nullable();
            $table->string('asn_jenjang_jabatan_nama')->nullable();
            $table->string('level')->nullable();
            $table->string('ref_urusan_pemerintahan_id', 42)->nullable();
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
