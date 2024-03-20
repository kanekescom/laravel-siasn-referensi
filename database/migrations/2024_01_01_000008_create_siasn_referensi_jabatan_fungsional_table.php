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
            $table->unsignedTinyInteger('min_gol_id')->nullable()->autoIncrement(false);
            $table->unsignedTinyInteger('max_gol_id')->nullable()->autoIncrement(false);
            $table->string('nama')->nullable();
            $table->unsignedTinyInteger('bup_usia', 2)->nullable()->autoIncrement(false);
            $table->unsignedInteger('tun_jabatan')->nullable()->autoIncrement(false);
            $table->unsignedSmallInteger('bobot')->nullable()->autoIncrement(false);
            $table->string('kel_jabatan_id')->nullable();
            $table->string('cepat_kode', 10)->nullable();
            $table->string('mgr_cepat_kode', 10)->nullable();
            $table->string('jenis', 1)->nullable()->autoIncrement(false);
            $table->string('cepat_kode_new', 10)->nullable();
            $table->string('status', 1)->nullable();
            $table->unsignedInteger('jml_formasi')->nullable()->autoIncrement(false);
            $table->string('nama_asli')->nullable();
            $table->string('jenjang', 2)->nullable();
            $table->string('jf_ex_medis', 1)->nullable();
            $table->string('is_syarat_jabatan', 1)->nullable();
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
