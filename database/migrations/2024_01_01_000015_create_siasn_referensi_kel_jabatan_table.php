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
        Schema::create('siasn_referensi_kel_jabatan', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('rumpunJabatanId')->nullable();
            $table->string('nama')->nullable();
            $table->string('lingkup')->nullable();
            $table->text('tugasPokok')->nullable();
            $table->text('pejabatPak')->nullable();
            $table->string('pembinaId')->nullable();
            $table->string('jenisJabatanUmumId')->nullable();
            $table->string('status')->nullable();
            $table->string('kodeRumpun')->nullable();
            $table->string('kodeKelompok')->nullable();
            $table->string('jenisJabatanUmumBaruId')->nullable();
            $table->string('kesehatanNonmedis')->nullable();
            $table->string('refUrusanPemerintahanId')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_kel_jabatan');
    }
};
