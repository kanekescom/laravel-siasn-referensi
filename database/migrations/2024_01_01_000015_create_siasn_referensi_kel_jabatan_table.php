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
            $table->string('id', 42)->primary();
            $table->string('rumpunJabatanId', 42)->nullable();
            $table->string('nama')->nullable();
            $table->string('lingkup', 1)->nullable();
            $table->text('tugasPokok')->nullable();
            $table->text('pejabatPak')->nullable();
            $table->string('pembinaId', 42)->nullable();
            $table->unsignedTinyInteger('jenisJabatanUmumId')->nullable();
            $table->string('status', 1)->nullable();
            $table->string('kodeRumpun', 4)->nullable();
            $table->string('kodeKelompok', 4)->nullable();
            $table->string('jenisJabatanUmumBaruId', 1)->nullable();
            $table->boolean('kesehatanNonmedis')->nullable();
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
