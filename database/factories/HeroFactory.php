<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'sub_title' => fake()->sentence(10),
            'btn_text' => $this->faker->text,
            'btn_url' => fake()->url(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
