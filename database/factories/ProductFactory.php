<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 5, 300),
            'stock' => $this->faker->numberBetween(0, 100),
            'format' => $this->faker->randomElement(['Digital', 'Físico']),
            'type' => $this->faker->randomElement(['Juego', 'DLC', 'Accesorio']),
            'platform' => $this->faker->randomElement(['PC', 'PS5', 'Xbox', 'Switch']),
            'category_id' => Category::factory(),
        ];
    }
}
