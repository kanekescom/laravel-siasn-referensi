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
        Schema::create('siasn_referensi_tingkat_pendidikan', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->unsignedTinyInteger('golongan_id')->nullable()->autoIncrement(false);
            $table->string('nama')->nullable();
            $table->unsignedTinyInteger('golongan_awal_id')->nullable()->autoIncrement(false);
            $table->string('id_lama', 2)->nullable();
            $table->unsignedTinyInteger('group_tk_pend_id')->nullable()->autoIncrement(false);
            $table->string('group_tk_pend_nm')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_tingkat_pendidikan');
    }
};
