<?php

namespace App\Http\Controllers\Dashboard\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME'),
            'users' => User::where('role', 'admin')->latest()->get(),
        ];

        return view('dashboard.master.index', $data);
    }
}
