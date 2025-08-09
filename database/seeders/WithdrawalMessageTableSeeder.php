<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\WithdrawalMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WithdrawalMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::where('role', 'user')->get();

        $users->each(function ($user) {
            // for ($i = 0; $i < rand(1, 3); $i++) {
            WithdrawalMessage::create([
                'user_id' => $user->id,
                'subject' => $this->getRandomSubject(),
                'message' => $this->getRandomMessage($user),
            ]);
            // }
        });
    }

    private function getRandomSubject()
    {
        $subjects = [
            'Withdrawal Request',
            'Payment Processing Update',
            'Funds Transfer Confirmation',
            'Withdrawal Status',
        ];
        return $subjects[array_rand($subjects)];
    }

    private function getRandomMessage($user)
    {
        $messages = [
            "Dear {$user->name}, your withdrawal request of {$user->account->balance} has been received and is being processed.",
            "Hello {$user->name}, we're updating you on your recent withdrawal. Current status: Pending.",
            "Hi {$user->name}, your funds transfer has been successfully completed. Amount: {$user->account->balance}.",
            "Dear {$user->name}, there was an issue processing your withdrawal. Please check your account details.",
        ];
        return $messages[array_rand($messages)];
    }
}
