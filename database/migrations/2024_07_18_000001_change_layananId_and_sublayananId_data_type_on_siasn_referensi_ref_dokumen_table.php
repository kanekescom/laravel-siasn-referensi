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
        Schema::table('siasn_referensi_ref_dokumen', function (Blueprint $table) {
            $table->string('layananId', 4)->change();
            $table->string('subLayananId', 4)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siasn_referensi_ref_dokumen', function (Blueprint $table) {
            $table->unsignedSmallInteger('layananId')->autoIncrement(false)->change();
            $table->unsignedSmallInteger('subLayananId')->autoIncrement(false)->change();
        });
    }
};
