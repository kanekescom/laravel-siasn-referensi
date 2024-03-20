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
            $table->unsignedTinyInteger('id')->primary();
            $table->string('nama');
            $table->string('eselon_level', 1);
            $table->string('ncsistime');
            $table->string('struktural_pns', 1);
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
