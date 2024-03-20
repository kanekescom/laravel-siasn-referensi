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
            $table->unsignedTinyInteger('id', 2)->primary()->autoIncrement(false);
            $table->string('nama')->nullable();
            $table->string('namaPangkat')->nullable();
            $table->unsignedSmallInteger('fungKredututama')->nullable()->autoIncrement(false);
            $table->unsignedSmallInteger('fungKreditTambahan')->nullable()->autoIncrement(false);
            $table->unsignedSmallInteger('fungKreditTotal')->nullable()->autoIncrement(false);
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
