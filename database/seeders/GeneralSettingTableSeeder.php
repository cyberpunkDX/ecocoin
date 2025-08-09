<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'currency' => 'Nigerian Naira-NGN-₦',
        ];

        GeneralSetting::updateOrCreate(['id' => 1], $data);
    }
}
