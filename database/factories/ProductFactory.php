<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
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
        $name = ucwords($this->faker->words(3, true));

        return [
            'category_id' => rand(1, 4),
            'name' => $name,
            'slug' => Str::slug($name . '-' . $this->faker->unique()->randomNumber(4)),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->numberBetween(15, 50) * 1000,
            'stock' => $this->faker->numberBetween(10, 100),
            'is_available' => true,
        ];
    }
}
