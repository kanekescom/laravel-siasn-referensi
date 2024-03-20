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
            $table->string('rumpunJabatanId', 42);
            $table->string('nama');
            $table->string('lingkup', 1);
            $table->text('tugasPokok');
            $table->text('pejabatPak');
            $table->string('pembinaId', 42);
            $table->unsignedTinyInteger('jenisJabatanUmumId');
            $table->string('status', 1);
            $table->string('kodeRumpun', 4);
            $table->string('kodeKelompok', 4);
            $table->string('jenisJabatanUmumBaruId', 1);
            $table->boolean('kesehatanNonmedis');
            $table->string('refUrusanPemerintahanId');
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
