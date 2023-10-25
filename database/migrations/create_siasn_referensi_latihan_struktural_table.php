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
        Schema::create('siasn_referensi_latihan_struktural', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama')->nullable();
            $table->string('eselon_level')->nullable();
            $table->string('ncsis_time')->nullable();
            $table->string('struktural_pns')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_latihan_struktural');
    }
};
