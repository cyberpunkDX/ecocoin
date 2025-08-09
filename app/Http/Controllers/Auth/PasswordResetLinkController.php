<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordResetToken;
use App\Http\Controllers\Controller;
use App\Mail\PasswordResetLink;
use Illuminate\Support\Facades\Mail;

class PasswordResetLinkController extends Controller
{

    public function create()
    {
        return view('auth.forgot_password', ['title' => 'Forgot Password']);
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email.']);
        }

        $token = Str::random(64);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $user->email
            ],
            [
                'token' => $token,
                'created_at' => now()
            ]
        );


        $passwordResetToken = PasswordResetToken::where('email', $user->email)->first();


        $passwordResetLink = route('password.reset', ['token' => $passwordResetToken->token, 'email' => $passwordResetToken->email]);

        try {
            Mail::to($user->email)->send(new PasswordResetLink($user, $passwordResetLink, 'Password Reset Link'));
            return redirect()->back()->with('success', 'Password reset link sent successfully. Please check your email.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while attempting to send the email. Please try again later.');
        }
    }
}
