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
            $table->string('id', 2)->primary();
            $table->string('regKota');
            $table->string('nama');
            $table->string('pengenal', 1);
            $table->string('satuanKerjaId', 42);
            $table->string('tanggalJorge');
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
