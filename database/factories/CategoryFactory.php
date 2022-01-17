<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->sentence($this->faker->numberBetween(1, 3)),
            'slug' => Str::slug($this->faker->unique()->sentence($this->faker->numberBetween(1, 3))),
            'priority' => $this->faker->randomDigit,
        ];
    }
}
