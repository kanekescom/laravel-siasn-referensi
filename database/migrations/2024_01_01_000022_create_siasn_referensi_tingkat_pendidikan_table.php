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
        Schema::create('siasn_referensi_tingkat_pendidikan', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('golongan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('golongan_awal_id')->nullable();
            $table->string('id_lama')->nullable();
            $table->string('group_tk_pend_id')->nullable();
            $table->string('group_tk_pend_nm')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_tingkat_pendidikan');
    }
};
