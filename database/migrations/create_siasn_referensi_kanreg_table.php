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
        Schema::create('siasn_referensi_kanreg', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('regional_kota')->nullable();
            $table->string('nama')->nullable();
            $table->string('pengenal')->nullable();
            $table->string('satuan_kerja_id')->nullable();
            $table->string('tanggal_jorge')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_kanreg');
    }
};
