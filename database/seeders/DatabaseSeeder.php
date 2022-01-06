<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SuratSeeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\PangkatSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\PerjalananSeeder;
use Database\Seeders\KendaraanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            JabatanSeeder::class,
            PangkatSeeder::class,
            PegawaiSeeder::class,
            PerjalananSeeder::class,
            KendaraanSeeder::class,
            SuratSeeder::class,
        ]);
    }
}
