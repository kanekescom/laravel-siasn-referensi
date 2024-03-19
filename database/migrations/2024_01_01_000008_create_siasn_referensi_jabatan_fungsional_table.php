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
        Schema::create('siasn_referensi_jabatan_fungsional', function (Blueprint $table) {
            $table->string('id', 42)->primary();
            $table->string('min_gol_id')->nullable();
            $table->string('max_gol_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('bup_usia')->nullable();
            $table->unsignedInteger('tun_jabatan')->nullable();
            $table->unsignedSmallInteger('bobot')->nullable();
            $table->string('kel_jabatan_id')->nullable();
            $table->string('cepat_kode')->nullable();
            $table->string('mgr_cepat_kode')->nullable();
            $table->string('jenis')->nullable();
            $table->string('cepat_kode_new')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('jml_formasi')->nullable();
            $table->string('nama_asli')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('jf_ex_medis')->nullable();
            $table->string('is_syarat_jabatan')->nullable();
            $table->string('jenis_jabatan_id')->nullable();
            $table->string('jenis_jabatan_nama')->nullable();
            $table->string('kode_jenjang_jabatan')->nullable();
            $table->string('asn_jenjang_jabatan')->nullable();
            $table->string('level')->nullable();
            $table->string('rumpun_jabatan_id')->nullable();
            $table->string('rumpun_jabatan_nama')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_jabatan_fungsional');
    }
};
