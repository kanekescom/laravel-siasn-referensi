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
        Schema::create('siasn_referensi_instansi', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('lokasi_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis')->nullable();
            $table->string('kode_cepat')->nullable();
            $table->string('proses_berkas_dipusat')->nullable();
            $table->string('kode_cepat_merger')->nullable();
            $table->string('status')->nullable();
            $table->string('kode_cepat5')->nullable();
            $table->string('kode_cepat5_lama')->nullable();
            $table->string('nama_baru')->nullable();
            $table->string('nama_jabatan')->nullable();
            $table->string('jenis_instansi_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_instansi');
    }
};
