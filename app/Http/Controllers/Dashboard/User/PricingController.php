<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['registered.user']);
    }
    public function index()
    {
        $pricings = Pricing::paginate(6);
        $user = Auth::user();
        $data = [
            'title' => 'Pricing',
            'pricings' => $pricings,
            'deposits' => $user->deposits,
            'user' => $user,
        ];

        return view('dashboard.user.pricing.index', $data);
    }
}
