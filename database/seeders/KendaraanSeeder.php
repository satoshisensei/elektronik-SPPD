<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'nama' => 'Dinas / Umum'
        ]);

        Kendaraan::create([
            'nama' => 'Mobil Pribadi'
        ]);

        Kendaraan::create([
            'nama' => 'Mobil Dinas'
        ]);

        Kendaraan::create([
            'nama' => 'Bus Umum'
        ]);

        Kendaraan::create([
            'nama' => 'Bus Dinas'
        ]);

        Kendaraan::create([
            'nama' => 'Kereta Rel Listrik'
        ]);

        Kendaraan::create([
            'nama' => 'Kapal Laut'
        ]);

        Kendaraan::create([
            'nama' => 'Pesawat'
        ]);
    }
}
