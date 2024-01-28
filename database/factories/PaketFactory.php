<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paket>
 */
class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "kode" => 'xa'. $this->faker->randomElement([5,10,15,20,25,50,100]),
            "harga" => $this->faker->randomElement([8000,13000,18000,23000,28000,53000,103000]),
            "jenis" => "pulsa",
            "deskripsi" => "pulsa Axis"
        ];
    }
}
