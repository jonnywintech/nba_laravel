<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'team_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}


