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
            $table->unsignedTinyInteger('min_gol_id')->autoIncrement(false);
            $table->unsignedTinyInteger('max_gol_id')->autoIncrement(false);
            $table->string('nama');
            $table->unsignedTinyInteger('bup_usia', 2)->autoIncrement(false);
            $table->unsignedInteger('tun_jabatan')->autoIncrement(false);
            $table->unsignedSmallInteger('bobot')->autoIncrement(false);
            $table->string('kel_jabatan_id');
            $table->string('cepat_kode', 10);
            $table->string('mgr_cepat_kode', 10);
            $table->string('jenis', 1)->autoIncrement(false);
            $table->string('cepat_kode_new', 10);
            $table->string('status', 1);
            $table->unsignedInteger('jml_formasi')->autoIncrement(false);
            $table->string('nama_asli');
            $table->string('jenjang', 2);
            $table->string('jf_ex_medis', 1);
            $table->string('is_syarat_jabatan', 1);
            $table->string('jenis_jabatan_id');
            $table->string('jenis_jabatan_nama');
            $table->string('kode_jenjang_jabatan');
            $table->string('asn_jenjang_jabatan');
            $table->string('level');
            $table->string('rumpun_jabatan_id');
            $table->string('rumpun_jabatan_nama');
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
