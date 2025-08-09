<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricings = [
            [
                'uuid' => str()->uuid(),
                'name' => 'Pricing 1',
                'minimum' => fake()->randomFloat(2, 0, 100),
                'maximum' => fake()->randomFloat(2, 0, 100),
                'features' => 'feature 1,feature 2,feature 3',
            ],
            [
                'uuid' => str()->uuid(),
                'name' => 'Pricing 2',
                'minimum' => fake()->randomFloat(2, 0, 100),
                'maximum' => fake()->randomFloat(2, 0, 100),
                'features' => 'feature 1,feature 2,feature 3',
            ],
            [
                'uuid' => str()->uuid(),
                'name' => 'Pricing 3',
                'minimum' => fake()->randomFloat(2, 0, 100),
                'maximum' => fake()->randomFloat(2, 0, 100),
                'features' => 'feature 1,feature 2,feature 3',
            ],
        ];

        foreach ($pricings as $key => $pricing) {
            Pricing::create($pricing);
        }
    }
}
