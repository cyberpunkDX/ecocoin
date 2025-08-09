<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Wallet::create([
                'uuid' => $faker->uuid,
                'name' => $faker->word,
                'address' => $faker->unique()->uuid,
                'image' => $faker->optional()->imageUrl(200, 200),
                'logo' => $faker->optional()->imageUrl(100, 100),
                'price' => $faker->optional()->randomFloat(2, 0, 1000),
                'network' => $faker->optional()->randomElement(['Ethereum', 'Bitcoin', 'Binance', 'Polygon']),
            ]);
        }
    }
}
