<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog>
 */
class CatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(rand(1, 2)),
            'category_id' => Category::factory(),
            'price' => rand(100, 1000),
            'detail' => fake()->sentence(),
        ];
    }
}
