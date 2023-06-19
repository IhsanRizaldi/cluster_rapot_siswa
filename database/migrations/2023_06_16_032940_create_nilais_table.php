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
            $table->float('bahasa_indonesia');
            $table->float('bahasa_inggris');
            $table->float('bahasa_jepang');
            $table->float('ilmu_pengetahuan_alam');
            $table->float('ilmu_pengetahuan_sosial');
            $table->float('matematika');
            $table->float('seni_budaya');
            $table->float('pendidikan_jasmani_dan_rohani');
            $table->float('pendidikan_agama_dan_budi_pekerti');
            $table->float('pendidikan_kewarganegaraan');
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
