<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SetKelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Siswa::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    // $kelas = SetKelas::all();
    // foreach ($kelas as $data) {
    //     \App\Models\Nilai::create([
    //         'setkelas_id' => $data->id,
    //         'bahasa_indonesia' => 0,
    //         'bahasa_inggris' => 0,
    //         'bahasa_jepang' => 0,
    //         'ilmu_pengetahuan_alam' => 0,
    //         'ilmu_pengetahuan_sosial' => 0,
    //         'matematika' => 0,
    //         'seni_budaya' => 0,
    //         'pendidikan_jasmani_dan_rohani' => 0,
    //         'pendidikan_agama_dan_budi_pekerti' => 0,
    //         'pendidikan_kewarganegaraan' => 0,
    //     ]);
    // }



    }
}
