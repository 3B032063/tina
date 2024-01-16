<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name'       => $this->faker->company,
            'description' => $this->faker->realText(100),
            'image'       => $this->faker->imageUrl,
            'price'       => $this->faker->randomNumber(4),
        ];
    }
}
