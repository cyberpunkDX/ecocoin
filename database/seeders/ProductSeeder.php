<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Wireless Headphones',
                'slug' => Str::slug('Wireless Headphones'),
                'image' => 'images/headphones.jpg',
                'description' => 'High-quality wireless headphones with noise cancellation and 20-hour battery life.',
                'price' => 99.99,
                'status' => true,
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Smart Watch',
                'slug' => Str::slug('Smart Watch'),
                'image' => 'images/smartwatch.jpg',
                'description' => 'Fitness tracking smart watch with heart rate monitor and GPS.',
                'price' => 149.99,
                'status' => true,
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'USB-C Charger',
                'slug' => Str::slug('USB-C Charger'),
                'image' => null,
                'description' => 'Fast-charging USB-C adapter compatible with multiple devices.',
                'price' => 29.99,
                'status' => true,
            ],
            [
                'uuid' => Str::uuid()->toString(),
                'name' => 'Laptop Backpack',
                'slug' => Str::slug('Laptop Backpack'),
                'image' => 'images/backpack.jpg',
                'description' => 'Water-resistant backpack with padded laptop compartment.',
                'price' => 59.99,
                'status' => false,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'uuid' => $product['uuid'],
                'name' => $product['name'],
                'slug' => $product['slug'],
                'image' => $product['image'],
                'description' => $product['description'],
                'price' => $product['price'],
                'status' => $product['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}