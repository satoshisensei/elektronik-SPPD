<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pegawai_id' => mt_rand(1,50),
            'perjalanan_id' => mt_rand(1,50),
            'nomor' => $this->faker->numerify('090'.'/'.'###'.'/'.'100.19'),
            'uraian' => $this->faker->sentence(2,true)
        ];
    }
}
