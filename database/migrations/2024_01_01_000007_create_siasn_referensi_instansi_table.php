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
            $table->string('id', 42)->primary();
            $table->string('lokasiId', 42)->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis')->nullable();
            $table->string('cepatKode')->nullable();
            $table->string('prosesBerkasDipusat')->nullable();
            $table->string('mgrCepatKode')->nullable();
            $table->string('status')->nullable();
            $table->string('cepatKode5')->nullable();
            $table->string('cepatKode5Lama')->nullable();
            $table->string('namaBaru')->nullable();
            $table->string('namaJabatan')->nullable();
            $table->string('jenisInstansiId', 42)->nullable();
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
