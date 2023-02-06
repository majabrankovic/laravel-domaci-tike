<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patika>
 */
class PatikaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brend_id'=>Brend::factory(),
            'user_id'=>User::factory(),
            'ime'=>$this->faker->text(),
            'opis'=>$this->faker->text(70),
            'cena'=>$this->faker->numerify(),
        ];
    }
}
