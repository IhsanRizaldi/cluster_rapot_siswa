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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->string('kode_kelas');
            $table->unsignedBigInteger('tahun_ajaran_id');
            $table->unsignedBigInteger('tingkat_id');
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajaran')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('tingkat_id')->references('id')->on('tingkat')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
