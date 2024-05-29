<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(2)
            ->sequence(
                [
                    'name' => 'Offre Basique',
                    'stripe_product_id' => 'price_1PLqqwK7FKdcmjVj18hSy9lg',
                    'price' => 9.99
                ],
                [
                    'name' => 'Offre Premium',
                    'stripe_product_id' => 'price_1PLqqwK7FKdcmjVjLA4vPWm5',
                    'price' => 19.99
                ]
            )
            ->create();
    }
}
