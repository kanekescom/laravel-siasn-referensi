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
            $table->string('nama');
            $table->string('cepat_kode', 10);
            $table->string('wajib_ganti_tertentu', 1);
            $table->string('mgr_cepat_kode', 10);
            $table->string('nama_asli');
            $table->string('kode_menpan', 16);
            $table->string('instansi_id', 42);
            $table->string('status', 1);
            $table->boolean('asal_peraturan_id');
            $table->unsignedInteger('jfu_urusan_pemerintahan')->autoIncrement(false);
            $table->unsignedTinyInteger('jenis_jabatan_umum_id');
            $table->string('jenis_jabatan_umum_nama');
            $table->string('asn_jenjang_jabatan_id');
            $table->string('asn_jenjang_jabatan_nama');
            $table->string('level');
            $table->string('ref_urusan_pemerintahan_id', 42);
            $table->string('ref_urusan_pemerintahan_nama');
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
