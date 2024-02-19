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
            $table->string('id')->primary();
            $table->string('kanregId')->nullable();
            $table->string('lokasiId')->nullable();
            $table->string('instansiId')->nullable();
            $table->string('nama')->nullable();
            $table->string('parentId')->nullable();
            $table->string('jenisSatuanKerjaId')->nullable();
            $table->string('unblockCode')->nullable();
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
