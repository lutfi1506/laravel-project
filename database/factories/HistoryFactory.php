<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lists>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "paket_id" => mt_rand(1,3),
            "tanggal" => $this->faker->date(),
            "no_hp" => $this->faker->numerify("08##########"),
            "nama" => $this->faker->name(),
            "status" => true,
            "hutangs_id" => mt_rand(1,3),
            "single_hutang" => $this->faker->numerify('#000')
        ];
    }
}
