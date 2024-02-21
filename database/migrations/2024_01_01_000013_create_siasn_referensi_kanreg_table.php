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
        Schema::create('siasn_referensi_kanreg', function (Blueprint $table) {
            $table->string('id', 42)->primary();
            $table->string('regKota')->nullable();
            $table->string('nama')->nullable();
            $table->string('pengenal')->nullable();
            $table->string('satuanKerjaId', 42)->nullable();
            $table->string('tanggalJorge')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_kanreg');
    }
};
