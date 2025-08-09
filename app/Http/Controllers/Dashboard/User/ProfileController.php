<?php

namespace App\Http\Controllers\Dashboard\User;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() : View {
        $user = Auth::user();
        $data = [
            "title" => "My profile",
            "user" => $user,
        ];
        return view('dashboard.user.profile.index', $data);
    }
}
