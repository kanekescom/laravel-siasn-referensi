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
            $table->string('id', 42)->primary();
            $table->unsignedTinyInteger('tingkat_pendidikan_id', 2)->nullable()->autoIncrement(false);
            $table->string('nama')->nullable();
            $table->string('cepat_kode', 10)->nullable();
            $table->string('mgr_cepat_kode', 10)->nullable();
            $table->string('nama_asli')->nullable();
            $table->boolean('status')->nullable();
            $table->string('subrumpun_prog_id', 8)->nullable();
            $table->string('cepat_kode_induk', 10)->nullable();
            $table->string('subrumpun_prog_kode', 8)->nullable();
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
