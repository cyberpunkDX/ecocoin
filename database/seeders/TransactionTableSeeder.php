<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = Account::all();

        $accounts->each(function ($account) {
            for ($i = 0; $i < rand(2, 5); $i++) {
                Transaction::create([
                    'uuid' => Str::uuid(),
                    'account_id' => $account->id,
                    'type' => rand(0, 1) ? 'deposit' : 'withdrawal',
                    'amount' => rand(10, 1000) + (rand(0, 99) / 100),
                    'description' => ['ATM withdrawal', 'Online purchase', 'Salary deposit', null][rand(0, 3)],
                    'status' => ['pending', 'failed', 'successful'][rand(0, 2)],
                ]);
            }
        });
    }
}
