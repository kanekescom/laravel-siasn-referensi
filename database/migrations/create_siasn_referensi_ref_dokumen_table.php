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
        Schema::create('siasn_referensi_ref_dokumen', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('layanan_id')->nullable();
            $table->string('layanan_nama')->nullable();
            $table->string('sub_layanan_id')->nullable();
            $table->string('sub_layanan_nama')->nullable();
            $table->string('detail_layanan_id')->nullable();
            $table->string('detail_layanan_nama')->nullable();
            $table->string('document')->nullable();
            $table->string('jenis_dokumen')->nullable();
            $table->string('file_type')->nullable();
            $table->string('link_proses')->nullable();
            $table->string('mandatory')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_ref_dokumen');
    }
};
