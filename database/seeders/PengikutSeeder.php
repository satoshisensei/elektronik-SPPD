<?php

namespace Database\Seeders;

use App\Models\Pengikut;
use Illuminate\Database\Seeder;

class PengikutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengikut::factory(50)->create();
    }
}
