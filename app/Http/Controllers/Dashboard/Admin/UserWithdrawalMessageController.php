<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\WithdrawalMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserWithdrawalMessageStoreRequest;

class UserWithdrawalMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userUUID)
    {
        $user = User::where('uuid', $userUUID)->firstOrFail();

        $data = [
            'title' => 'Withdrawal Message',
            'user' => $user
        ];

        return view('dashboard.admin.user.withdrawal_message.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserWithdrawalMessageStoreRequest $request, string $userUUID)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('uuid', $userUUID)->firstOrFail();

            $data['user_id'] = $user->id;

            WithdrawalMessage::updateOrCreate(
                ['user_id' => $user->id],
                $data
            );

            DB::commit();

            return redirect()->route('admin.user.withdrawal.message.index', $userUUID)->with('success', 'Withdrawal message updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
