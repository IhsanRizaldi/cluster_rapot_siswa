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
        Schema::create('set_kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('walikelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('siswa_id')->references('id')->on('siswa')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('walikelas_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_kelas');
    }
};
