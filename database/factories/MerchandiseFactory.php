<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $retailPrice = fake()->numberBetween(5,200);
        $wholeSaleQty = fake()->randomElement([10,6,12,20,24,100]);

        return [
            'brand' => fake()->text(50),
            'description' => fake()->words(5,true),
            'retail_price' => $retailPrice,
            'whole_sale_qty' => $wholeSaleQty,
            'whole_sale_price' => ($retailPrice*$wholeSaleQty) * 0.95,
            'qty_stock' => fake()->numberBetween(10,500)
        ];
    }
}
