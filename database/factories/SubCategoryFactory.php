<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->words(2, true),
            'priority' => $this->faker->randomDigit,
        ];
    }
}
