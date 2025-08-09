<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\WalletTableSeeder;
use Database\Seeders\AccountTableSeeder;
use Database\Seeders\DepositTableSeeder;
use Database\Seeders\PricingTableSeeder;
use Database\Seeders\TransactionTableSeeder;
use Database\Seeders\GeneralSettingTableSeeder;
use Database\Seeders\WithdrawalMessageTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'role' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        User::create([
            'uuid' => Str::uuid()->toString(),
            'role' => 'user',
            'name' => 'John Green',
            'email' => 'john.green@example.com',
            'email_code' => Str::random(6),
            'email_code_expires_at' => Carbon::now()->addHours(24),
            'email_verified_at' => Carbon::now(),
            'dial_code' => '+1',
            'phone' => '5551234567',
            'image' => null,
            'gender' => 'male',
            'date_of_birth' => '1990-05-15',
            'password' => bcrypt('password'),
            'status' => true,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        User::create([
            'uuid' => Str::uuid()->toString(),
            'role' => 'admin',
            'name' => 'Jane Eco',
            'email' => 'jane.eco@example.com',
            'email_code' => null,
            'email_code_expires_at' => null,
            'email_verified_at' => Carbon::now(),
            'dial_code' => '+1',
            'phone' => '5559876543',
            'image' => 'profile.jpg',
            'gender' => 'female',
            'date_of_birth' => '1985-08-22',
            'password' => bcrypt('admin123'),
            'status' => true,
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        

        $this->call([
            AccountTableSeeder::class,
            PricingTableSeeder::class,
            DepositTableSeeder::class,
            WalletTableSeeder::class,
            GeneralSettingTableSeeder::class,
            TransactionTableSeeder::class,
            WithdrawalMessageTableSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
