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
            $table->string('id')->primary();
            $table->string('min_golongan_id')->nullable();
            $table->string('max_golongan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('usia_bup')->nullable();
            $table->string('tunjangan_jabatan')->nullable();
            $table->string('bobot')->nullable();
            $table->string('kel_jabatan_id')->nullable();
            $table->string('kode_cepat')->nullable();
            $table->string('kode_cepat_merger')->nullable();
            $table->string('jenis')->nullable();
            $table->string('kode_cepat_new')->nullable();
            $table->string('status')->nullable();
            $table->string('jumlah_formasi')->nullable();
            $table->string('nama_asli')->nullable();
            $table->string('jenjang')->nullable();
            $table->string('jf_ex_medis')->nullable();
            $table->string('is_syarat_jabatan')->nullable();
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
