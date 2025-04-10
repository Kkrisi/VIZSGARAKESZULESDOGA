<?php

namespace Database\Factories;

use App\Models\kategoriak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tevekenysegek>
 */
class TevekenysegekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kat_id' => kategoriak::factory(),
            'tev_nev' => $this->faker->randomElement(['teendő_1','teendő_2','teendő_3','teendő_4']),
            'allapot' => $this->faker->randomElement(['kész','nincs kész']),
        ];
    }
}
