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
            $table->unsignedTinyInteger('id')->primary();
            $table->unsignedTinyInteger('layananId')->nullable()->autoIncrement(false);
            $table->string('layananNama')->nullable();
            $table->unsignedTinyInteger('subLayananId')->nullable()->autoIncrement(false);
            $table->string('subLayananNama')->nullable();
            $table->string('detailLayananId')->nullable();
            $table->string('detailLayananNama')->nullable();
            $table->string('document')->nullable();
            $table->string('jenisDokumen', 1)->nullable();
            $table->string('fileType', 8)->nullable();
            $table->string('linkProses', 4)->nullable();
            $table->boolean('mandatory')->nullable();
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
