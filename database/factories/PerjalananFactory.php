<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tempat_tujuan' => $this->faker->city(),
            'tanggal_berangkat' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->date(now())
        ];
    }
}
