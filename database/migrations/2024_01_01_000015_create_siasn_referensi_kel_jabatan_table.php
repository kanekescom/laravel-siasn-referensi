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
            $table->string('rumpun_jabatan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('lingkup')->nullable();
            $table->text('tugas_pokok')->nullable();
            $table->text('pejabat_pak')->nullable();
            $table->string('pembina_id')->nullable();
            $table->string('jenis_jabatan_umum_id')->nullable();
            $table->string('status')->nullable();
            $table->string('kode_rumpun')->nullable();
            $table->string('kode_kelompok')->nullable();
            $table->string('jenis_jabatan_umum_baru_id')->nullable();
            $table->string('kesehatan_nonmedis')->nullable();
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
