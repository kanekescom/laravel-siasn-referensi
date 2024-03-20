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
            $table->string('id', 2)->primary();
            $table->string('nama')->nullable();
            $table->unsignedTinyInteger('terendah_id')->nullable()->autoIncrement(false);
            $table->unsignedTinyInteger('tertinggi_id')->nullable()->autoIncrement(false);
            $table->unsignedTinyInteger('eselon_level_id', 1)->nullable()->autoIncrement(false);
            $table->string('asn_jenjang_jabatan_id', 2)->nullable();
            $table->string('jabatan_asn')->nullable();
            $table->string('level_kompetensi_jabatan')->nullable();
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
