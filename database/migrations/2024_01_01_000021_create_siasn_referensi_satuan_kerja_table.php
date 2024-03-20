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
        Schema::create('siasn_referensi_satuan_kerja', function (Blueprint $table) {
            $table->string('id', 42)->primary();
            $table->string('kanregId', 2);
            $table->string('lokasiId', 42);
            $table->string('instansiId', 42);
            $table->string('nama');
            $table->string('parentId', 42);
            $table->string('jenisSatuanKerjaId', 2);
            $table->string('unblockCode', 8);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_satuan_kerja');
    }
};
