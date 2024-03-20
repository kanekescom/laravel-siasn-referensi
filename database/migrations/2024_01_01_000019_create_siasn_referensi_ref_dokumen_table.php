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
            $table->unsignedSmallInteger('id')->primary();
            $table->unsignedSmallInteger('layananId')->autoIncrement(false);
            $table->string('layananNama');
            $table->unsignedSmallInteger('subLayananId')->autoIncrement(false);
            $table->string('subLayananNama');
            $table->string('detailLayananId');
            $table->string('detailLayananNama');
            $table->string('document');
            $table->string('jenisDokumen', 1);
            $table->string('fileType', 8);
            $table->string('linkProses', 4);
            $table->boolean('mandatory');
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
