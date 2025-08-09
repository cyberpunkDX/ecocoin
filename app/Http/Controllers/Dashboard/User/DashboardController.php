<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['registered.user'])->only('index');
    }

    public function index()
    {
        $user = Auth::user();
        $transactions = $user->account->transactions;
        $roiData = $this->calculatePortfolioROI($user);
        $finances = $this->finances();
        $chartData = $finances['chartData'];
        $data = [
            'title' => "Welcome, " . $user->name,
            'user' => $user,
            'transactions' => $transactions,
            'roi' => $roiData['roi'],
            'status' => $roiData['status'],
            'chartData' => $chartData,
        ];
        return view('dashboard.user.index', $data);
    }

    private function finances(){
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Get the user's account IDs
        $accountIds = Account::where('user_id', $userId)->pluck('id')->toArray();

        // Query transactions for the last 12 months
        $finances = DB::table('transactions')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
                DB::raw("SUM(CASE WHEN type = 'deposit' THEN amount ELSE 0 END) as income"),
                DB::raw("SUM(CASE WHEN type = 'withdrawal' THEN amount ELSE 0 END) as expenses")
            )
            ->whereIn('account_id', $accountIds)
            // ->where('status', 'successful') // Only successful transactions
            ->where('created_at', '>=', now()->subMonths(12)) // Last 12 months
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
            ->orderBy('month', 'asc')
            ->get();

        // Format data for Google Charts
        $chartData = [['Month', 'Income', 'Expenses']];
        foreach ($finances as $row) {
            $chartData[] = [
                $row->month,
                (float)$row->income,  // Cast to float for Google Charts
                (float)$row->expenses
            ];
        }

        // Handle case with no data
        if (empty($finances)) {
            $chartData[] = ['No Data', 0, 0];
        }

        // Pass data to the view
        return  [
            'chartData' => json_encode($chartData),
        ];
    }

    private function calculatePortfolioROI($user)
    {
        $expenses = $user->account->expenses ?? 0; // Total invested
        $balance = $user->account->balance ?? 0;   // Current portfolio value
        $expectedRoi = 10; // Define your expected ROI percentage (e.g., 10%)

        // Avoid division by zero
        if ($expenses == 0) {
            return [
                'roi' => 0,
                'status' => 'neutral', // Or handle differently
            ];
        }

        $netProfit = $balance - $expenses;
        $roi = ($netProfit / $expenses) * 100;
        $roi = round($roi, 2);

        // Determine status based on expected ROI
        $status = ($roi >= $expectedRoi) ? 'success' : 'danger';

        return [
            'roi' => $roi,
            'status' => $status,
        ];
    }
}
