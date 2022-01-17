<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->firstName,
            'email' => $this->faker->unique()->email,
            'password' => bcrypt('adgjmp420'),
            'role_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
