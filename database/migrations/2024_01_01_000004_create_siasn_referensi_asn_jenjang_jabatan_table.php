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
        Schema::create('siasn_referensi_asn_jenjang_jabatan', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->string('nama')->nullable();
            $table->string('asnJenisJabatanId', 2)->nullable();
            $table->unsignedTinyInteger('level', 1)->nullable()->autoIncrement(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_asn_jenjang_jabatan');
    }
};
