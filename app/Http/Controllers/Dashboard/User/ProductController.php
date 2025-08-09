<?php

namespace App\Http\Controllers\Dashboard\User;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(3);
        $user = Auth::user();
        $data = [
            'title' => 'Invest in Products',
            'products' => $products,
            'user' => $user,
        ];
        return view('dashboard.user.product.index', $data);  
    }

    public function investment(Request $request)
    {
        // Validate that cart is a valid JSON string
        $request->validate([
            'cart' => 'required|string', // Expect a JSON string
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated');
        }

        // Decode JSON cart
        $cart = json_decode($request->input('cart'), true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($cart)) {
            return redirect()->back()->with('error', 'Invalid cart data');
        }
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Cart is empty');
        }

        // Validate cart items
        foreach ($cart as $item) {
            if (!isset($item['id'], $item['price']) || !is_numeric($item['price'])) {
                return redirect()->back()->with('error', 'Invalid cart item data');
            }
        }

        $totalInvestment = collect($cart)->sum('price');

        // Check if user has sufficient balance (optional)
        $account = $user->account;
        if ($account->balance < $totalInvestment) {
            return redirect()->back()->with('error', 'Insufficient balance');
        }

        try {
            DB::transaction(function () use ($user, $cart, $account, $totalInvestment) {
                foreach ($cart as $item) {
                    $product = Product::findOrFail($item['id']);

                    Investment::create([
                        'user_id' => $user->id,
                        'product_id' => $product->id,
                        'amount' => $item['price'],
                        'roi' => $product->roi,
                        'duration' => $product->duration,
                        'start_date' => Carbon::now(),
                        'end_date' => Carbon::now()->addDays($product->duration),
                        'is_completed' => false,
                    ]);
                }

                // Deduct total investment from balance
                $account->decrement('balance', $totalInvestment);
            });

            return redirect()->back()->with('success', 'Investments created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating investments: ' . $e->getMessage());
        }
    }

    public function show(string $uuid)
    {
        $product = Product::where('uuid', $uuid)->firstOrFail();
        $user = Auth::user();
        $data = [
            'title' => 'Product Detail',
            'product' => $product,
            'user' => $user,
        ];
        return view('dashboard.user.product.show', $data);
    }
    public function showInvestments()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->back()->with('error', 'User not authenticated');
        }

        $investments = Investment::where('user_id', $user->id)->with('product')->get();

        $data = [
            'title' => 'My Investments',
            'investments' => $investments,
            'user' => $user,
        ];

        return view('dashboard.user.investment.index', $data);
    }
}
