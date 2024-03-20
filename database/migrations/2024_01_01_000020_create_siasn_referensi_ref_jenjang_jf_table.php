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
        Schema::create('siasn_referensi_ref_jenjang_jf', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->string('deskripsi')->nullable();
            $table->string('peraturan')->nullable();
            $table->unsignedTinyInteger('kode')->nullable()->autoIncrement(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_ref_jenjang_jf');
    }
};
