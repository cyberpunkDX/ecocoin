<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\PasswordResetToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class NewPasswordController extends Controller
{
    public function create(Request $request)
    {
        $data = [
            'title' => 'Reset Password',
            'request' => $request,
        ];

        return view('auth.reset_password', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::where('email', $request->email)->first();

        $passwordResetToken = PasswordResetToken::where('token', $request->token)->first();

        if (!$user && !$passwordResetToken) {
            return redirect()->route('login')->with('error', 'Invalid token');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Password changed successfully');
    }
}
