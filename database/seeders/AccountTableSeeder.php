<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Account;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', 'user')->get();

        $currencies = ['Russian Ruble-RUB-₽', 'Nigerian Naira-NGN-₦', 'US Dollar-USD-$', 'Japanese Yen-JPY-¥'];

        foreach ($users as $user) {
            Account::create([
                'uuid' => Str::uuid(),
                'user_id' => $user->id,
                'currency' => $currencies[array_rand($currencies)],
                'balance' => rand(1000, 10000) / 100,
                'expenses' => rand(500, 5000) / 100,
                'profit' => rand(100, 2000) / 100,
            ]);
        }
    }
}
