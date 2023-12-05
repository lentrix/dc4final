<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'          =>  fake()->dateTimeBetween('-2 years'),
            'supplier_id'   =>  fake()->numberBetween(1,10),
            'total'         =>  0,
            'user_id'       =>  1,
        ];
    }
}
