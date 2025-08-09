<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Pricing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepositTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = Account::all();
        $pricingPlans = Pricing::all();

        $statuses = ['pending', 'cancelled', 'completed'];

        foreach ($accounts as $account) {
            // Random number of deposits (between 1 and 7) for each user
            $numberOfDeposits = rand(1, 7);

            for ($i = 0; $i < $numberOfDeposits; $i++) {
                Deposit::create([
                    'uuid' => str()->uuid(),
                    'account_id' => $account->id,
                    'pricing_id' => $pricingPlans->random()->id,
                    'amount' => rand(1000, 50000) / 100,
                    'status' => $statuses[array_rand($statuses)],
                ]);
            }
        }
    }
}
