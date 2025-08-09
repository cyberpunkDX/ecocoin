<?php

namespace App\Console\Commands;

use App\Models\Investment;
use App\Models\Account;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProcessRoi extends Command
{
    protected $signature = 'roi:process';
    protected $description = 'Process ROI for investments and credit user accounts';

    public function handle()
    {
        $this->info('Processing ROI for investments...');

        // Find investments that are not completed and have reached their end date
        $investments = Investment::where('is_completed', false)
            ->where('end_date', '<=', Carbon::now())
            ->get();

        if ($investments->isEmpty()) {
            $this->info('No investments to process.');
            return;
        }

        DB::transaction(function () use ($investments) {
            foreach ($investments as $investment) {
                // Calculate ROI amount
                $roiAmount = ($investment->amount * $investment->roi) / 100;

                // Update user's account balance
                $account = Account::firstOrCreate(
                    ['user_id' => $investment->user_id],
                    ['balance' => 0.00]
                );

                $account->increment('balance', $roiAmount);

                // Mark investment as completed
                $investment->update([
                    'is_completed' => true,
                ]);

                $this->info("Processed ROI for user {$investment->user_id}: Added \${$roiAmount} from investment ID {$investment->id}");
            }
        });

        $this->info('ROI processing completed.');
    }
}