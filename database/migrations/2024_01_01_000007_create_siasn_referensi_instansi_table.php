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
            $table->string('lokasiId', 42);
            $table->string('nama');
            $table->string('jenis', 1);
            $table->string('cepatKode', 10);
            $table->string('prosesBerkasDipusat');
            $table->string('mgrCepatKode');
            $table->string('status', 1);
            $table->string('cepatKode5', 10);
            $table->string('cepatKode5Lama', 10);
            $table->string('namaBaru');
            $table->string('namaJabatan');
            $table->string('jenisInstansiId', 8);
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
