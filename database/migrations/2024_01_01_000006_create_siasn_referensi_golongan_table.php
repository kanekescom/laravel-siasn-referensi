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
        Schema::create('siasn_referensi_golongan', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->primary()->autoIncrement(false);
            $table->string('nama');
            $table->string('namaPangkat');
            $table->unsignedSmallInteger('fungKredututama')->autoIncrement(false);
            $table->unsignedSmallInteger('fungKreditTambahan')->autoIncrement(false);
            $table->unsignedSmallInteger('fungKreditTotal')->autoIncrement(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_referensi_golongan');
    }
};
