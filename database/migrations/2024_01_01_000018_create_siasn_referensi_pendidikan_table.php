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
        Schema::create('siasn_referensi_pendidikan', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('tingkat_pendidikan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('kode_cepat')->nullable();
            $table->string('kode_cepat_merger')->nullable();
            $table->string('nama_asli')->nullable();
            $table->string('status')->nullable();
            $table->string('sub_rumpun_prog_id')->nullable();
            $table->string('kode_cepat_induk')->nullable();
            $table->string('sub_rumpun_prog_kode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_pendidikan');
    }
};
