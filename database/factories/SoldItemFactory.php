<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoldItem>
 */
class SoldItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merchandise_id'    =>  fake()->numberBetween(1, 600),
            'sale_id'           =>  fake()->numberBetween(1,100),
            'qty'               =>  fake()->numberBetween(1,5),
            'selling_price'     =>  fake()->numberBetween(5,100)
        ];
    }
}
