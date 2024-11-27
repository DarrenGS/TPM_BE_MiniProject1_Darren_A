<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
        protected static function newFactory()
    {
        return ProductFactory::new();
    }
    public function definition(): array
    {
        return [
            "ProductName" => fake()->name(),
            "ProductPrice" => fake()->randomNumber(7),
            "ProductIMG" => fake()->imageUrl(),
            "CategoryId" => random_int(1, 5)
        ];
    }
}
