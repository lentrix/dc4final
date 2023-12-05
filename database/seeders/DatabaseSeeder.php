<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Benjie Lenteria',
            'email' => 'me@lentrix-dev.com',
            'password'=>bcrypt('password123')
        ]);

        $this->call(CustomerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(MerchandiseSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(PurchasedItemSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(SoldItemSeeder::class);
    }
}
