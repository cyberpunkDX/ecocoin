<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Models\User;
use App\Trait\FileUpload;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use FileUpload;
    public function index()
    {
        $data = [
            'title' => 'Users',
            'users' => User::where('role', 'user')->latest()->get(),
        ];

        return view('dashboard.admin.user.index', $data);
    }

    public function show(string $uuid)
    {
        $data = [
            'title' => 'User Detail',
            'user' => User::where('uuid', $uuid)->firstOrFail(),
        ];

        return view('dashboard.admin.user.show', $data);
    }

    public function edit(string $uuid)
    {
        $data = [
            'title' => 'Edit User',
            'user' => User::where('uuid', $uuid)->where('role', 'user')->firstOrFail(),
        ];

        return view('dashboard.admin.user.edit', $data);
    }

    public function update(AdminUserUpdateRequest $request, string $uuid)
    {
        $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('uuid', $uuid)->where('role', 'user')->firstOrFail();

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'dial_code' => $request->dial_code,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'status' => $request->status,
            ];

            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }

            $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/users/', 450, 450, $user->image);

            $user->update($data);

            $user->account()->update([
                'currency' => $request->currency,
                'balance' => $request->balance,
                'expenses' => $request->expenses,
                'profit' => $request->profit,
                'successful_withdrawals' => $request->successful_withdrawals
            ]);

            DB::commit();

            return redirect()->route('admin.user.index')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }

    public function delete(string $uuid)
    {
        DB::beginTransaction();
        try {
            $user = User::where('uuid', $uuid)->where('role', 'user')->firstOrFail();

            $this->deleteFile($user->image);

            $user->delete();

            DB::commit();

            return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
}
