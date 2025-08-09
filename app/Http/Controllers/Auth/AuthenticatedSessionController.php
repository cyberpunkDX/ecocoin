<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticatedSessionStoreRequest;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login', ['title' => 'Login Account']);
    }

    public function store(AuthenticatedSessionStoreRequest $request)
    {
        $request->validated();

        $remember = $request->remember;

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            if ($user->role == 'user') {
                if ($user->status == false) {
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'Your account is currently inactive.',
                    ]);
                }
                return redirect()->intended(route('user.dashboard'));
            } elseif ($user->role == 'admin') {
                if ($user->status == false) {
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'Your account is currently inactive.',
                    ]);
                }
                return redirect()->intended(route('admin.dashboard'));
            } elseif ($user->role == 'master') {
                return redirect()->intended(route('master.dashboard'));
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
