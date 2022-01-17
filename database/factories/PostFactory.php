<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence($this->faker->numberBetween(5, 20)),
            'slug' => Str::slug($this->faker->unique()->sentence($this->faker->numberBetween(5, 20))),
            'body' => $this->faker->paragraphs($this->faker->numberBetween(1, 10), true),
            'thumbnail' => $this->faker->imageUrl(),
            'author' => $this->faker->name,
            'author_image' => $this->faker->imageUrl(400, 400, 'people'),
            'category_id' => $this->faker->numberBetween(1, 10),
            'subcategory_id' => $this->faker->numberBetween(1, 10),
            'admin_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
