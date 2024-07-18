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
            $table->text('layananId')->change();
            $table->text('subLayananId', 4)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siasn_referensi_ref_dokumen', function (Blueprint $table) {
            $table->dropColumn('layananId', 'subLayananId');
        });
    }
};
