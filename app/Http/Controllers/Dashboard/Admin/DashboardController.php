<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => env('APP_NAME'),
            'users' => User::where('role', 'user')->latest()->get(),
        ];

        return view('dashboard.admin.index', $data);
    }
}
