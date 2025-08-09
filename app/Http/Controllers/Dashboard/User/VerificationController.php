<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisteredUserWelcomeMessage;
use App\Mail\RegisteredUserEmailVerification;
use App\Http\Requests\RegisteredUserSubmitVerificationRequest;

class VerificationController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Verification',
            'user' => User::where('role', 'user')->where('id', Auth::id())->firstOrFail()
        ];

        return view('dashboard.user.verification.index', $data);
    }

    public function resendVerification()
    {
        DB::beginTransaction();
        try {
            $user = User::where('role', 'user')->where('id', Auth::id())->firstOrFail();

            $code = rand(100000, 999999);

            $user->update([
                'email_code' => $code,
                'email_code_expires_at' => now()->addMinutes(15),
            ]);

            DB::commit();

            Mail::to($user->email)->send(new RegisteredUserEmailVerification($user, 'Email Verification - ' . env('APP_NAME')));

            return redirect()->back()->with('success', 'Verification code sent!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Failed to resend verification code');
        }
    }


    public function submitVerification(RegisteredUserSubmitVerificationRequest $request)
    {
        $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('role', 'user')->where('id', Auth::id())->firstOrFail();

            if ($user->email_code_expires_at < now()) {
                DB::commit();
                return redirect()->back()->with('error', 'Verification code has expired. Please request a new one.');
            }

            if ($user->email_code != $request->code) {
                DB::commit();
                return redirect()->back()->with('error', 'Invalid verification code.');
            }

            $user->update([
                'email_verified_at' => now(),
                'email_code' => null,
                'email_code_expires_at' => null,
            ]);

            DB::commit();

            Mail::to($user->email)->send(new RegisteredUserWelcomeMessage($user, 'Welcome to ' . env('APP_NAME')));

            return redirect()->route('user.dashboard')->with('success', 'Email Address verified successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Failed to verify email Address');
        }
    }
}
