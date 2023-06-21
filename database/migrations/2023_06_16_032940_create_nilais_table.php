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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('setkelas_id');
            $table->foreign('setkelas_id')->references('id')->on('set_kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('bahasa_indonesia');
            $table->integer('bahasa_inggris');
            $table->integer('bahasa_jepang');
            $table->integer('ilmu_pengetahuan_alam');
            $table->integer('ilmu_pengetahuan_sosial');
            $table->integer('matematika');
            $table->integer('seni_budaya');
            $table->integer('pendidikan_jasmani_dan_rohani');
            $table->integer('pendidikan_agama_dan_budi_pekerti');
            $table->integer('pendidikan_kewarganegaraan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
