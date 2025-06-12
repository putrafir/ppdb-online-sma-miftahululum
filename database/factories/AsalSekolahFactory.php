<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asalSekolah>
 */
class AsalSekolahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'provinsiSMP' => fake()->state(),
            'asalSMP' => 'MTS Miftahul Ulum',
            'kotaSMP' => "Banyuwangi",
            'alamatSMP' => fake()->address(),

            'provinsiSMP' => fake()->state(),
            'asalSMP' => 'MTS Nurut Takwa',
            'kotaSMP' => "Banyuwangi",
            'alamatSMP' => fake()->address(),

        ];
    }
}
