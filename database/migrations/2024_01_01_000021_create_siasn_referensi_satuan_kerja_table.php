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
            $table->string('kanreg_id')->nullable();
            $table->string('lokasi_id')->nullable();
            $table->string('instansi_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('jenis_satuan_kerja_id')->nullable();
            $table->string('unblock_code')->nullable();
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
