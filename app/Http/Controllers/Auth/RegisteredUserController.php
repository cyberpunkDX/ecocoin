<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisteredUserStoreRequest;
use App\Mail\RegisteredUserEmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register', ['title' => 'Register Account']);
    }

    public function store(RegisteredUserStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $data['uuid'] = Str::uuid();
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);

            $user->account()->create([
                'uuid' => Str::uuid(),
                'user_id' => $user->id,
            ]);

            event(new Registered($user));

            Auth::login($user);

            $code = rand(100000, 999999);

            $user->update([
                'email_code' => $code,
                'email_code_expires_at' => now()->addMinutes(15),
            ]);

            DB::commit();

            Mail::to($user->email)->send(new RegisteredUserEmailVerification($user, 'Email Verification - ' . env('APP_NAME')));

            return redirect(route('user.verification'))->with('success', 'Verification code sent!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }
}
