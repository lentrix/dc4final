<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchasedItem>
 */
class PurchasedItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merchandise_id'    => fake()->numberBetween(1, 600),
            'purchase_id'       => fake()->numberBetween(1, 100),
            'whole_sale_qty'    => fake()->numberBetween(1,20),
            'purchase_price'    => fake()->numberBetween(200,2000),
        ];
    }
}
