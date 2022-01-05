<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pangkat::create([
            'golongan' => 'I',
            'ruang' => 'a',
        ]);

        Pangkat::create([
            'golongan' => 'I',
            'ruang' => 'b',
        ]);

        Pangkat::create([
            'golongan' => 'I',
            'ruang' => 'c',
        ]);

        Pangkat::create([
            'golongan' => 'I',
            'ruang' => 'd',
        ]);

        Pangkat::create([
            'golongan' => 'II',
            'ruang' => 'a',
        ]);

        Pangkat::create([
            'golongan' => 'II',
            'ruang' => 'b',
        ]);

        Pangkat::create([
            'golongan' => 'II',
            'ruang' => 'c',
        ]);

        Pangkat::create([
            'golongan' => 'II',
            'ruang' => 'd',
        ]);

        Pangkat::create([
            'golongan' => 'III',
            'ruang' => 'a',
        ]);

        Pangkat::create([
            'golongan' => 'III',
            'ruang' => 'b',
        ]);

        Pangkat::create([
            'golongan' => 'III',
            'ruang' => 'c',
        ]);

        Pangkat::create([
            'golongan' => 'III',
            'ruang' => 'd',
        ]);

        Pangkat::create([
            'golongan' => 'IV',
            'ruang' => 'a',
        ]);

        Pangkat::create([
            'golongan' => 'IV',
            'ruang' => 'b',
        ]);

        Pangkat::create([
            'golongan' => 'IV',
            'ruang' => 'c',
        ]);

        Pangkat::create([
            'golongan' => 'IV',
            'ruang' => 'd',
        ]);
    }
}
