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
            $table->unsignedTinyInteger('tingkat_pendidikan_id', 2)->autoIncrement(false);
            $table->string('nama');
            $table->string('cepat_kode', 10);
            $table->string('mgr_cepat_kode', 10);
            $table->string('nama_asli');
            $table->boolean('status');
            $table->string('subrumpun_prog_id', 8);
            $table->string('cepat_kode_induk', 10);
            $table->string('subrumpun_prog_kode', 8);
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
