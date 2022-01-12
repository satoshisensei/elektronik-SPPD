<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status' => 'Menunggu'
        ]);

        Status::create([
            'status' => 'Disetujui'
        ]);

        Status::create([
            'status' => 'Ditolak'
        ]);
    }
}
