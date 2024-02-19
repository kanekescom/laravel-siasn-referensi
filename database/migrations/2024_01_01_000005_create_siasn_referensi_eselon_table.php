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
        Schema::create('siasn_referensi_eselon', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama')->nullable();
            $table->string('golongan_terendah_id')->nullable();
            $table->string('golongan_tertinggi_id')->nullable();
            $table->string('eselon_level_id')->nullable();
            $table->string('asn_jenjang_jabatan_id')->nullable();
            $table->string('jabatan_asn')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_eselon');
    }
};
