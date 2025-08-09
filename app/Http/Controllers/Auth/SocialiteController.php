<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\RegisteredUserEmailVerification;

class SocialiteController extends Controller
{
    public function redirect($provider)
    {
        if (!in_array($provider, ['google', 'github'])) {
            abort(400, 'Invalid provider');
        }
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        if (!in_array($provider, ['google', 'github'])) {
            abort(400, 'Invalid provider');
        }

        DB::beginTransaction();
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate(
                [
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                ],
                [
                    'uuid' => str()->uuid(),
                    'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                    'email' => $socialUser->getEmail(),
                    'image' => $socialUser->getAvatar(),
                ]
            );

            $user->account()->create([
                'uuid' => Str::uuid(),
                'user_id' => $user->id,
            ]);

            DB::commit();

            Auth::login($user);

            if ($user->email_verified_at == null) {
                $code = rand(100000, 999999);

                $user->update([
                    'email_code' => $code,
                    'email_code_expires_at' => now()->addMinutes(15),
                ]);

                DB::commit();

                Mail::to($user->email)->send(new RegisteredUserEmailVerification($user, 'Email Verification - ' . env('APP_NAME')));

                return redirect(route('user.verification'))->with('success', 'Verification code sent!');
            } else {
                return redirect()->route('user.dashboard');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect('/')->with('error', 'Authentication failed');
        }
    }
}
