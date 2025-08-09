<?php

namespace App\Http\Controllers\Dashboard\Master;

use App\Models\User;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\MasterAdminUpdateRequest;

class AdminController extends Controller
{
    use FileUpload;
    public function index()
    {
        $data = [
            'title' => 'Admins',
            'users' => User::where('role', 'admin')->latest()->get(),
        ];

        return view('dashboard.master.admin.index', $data);
    }

    public function show(string $uuid)
    {
        $data = [
            'title' => 'Admin Detail',
            'user' => User::where('uuid', $uuid)->where('role', 'admin')->firstOrFail(),
        ];

        return view('dashboard.master.admin.show', $data);
    }

    public function edit(string $uuid)
    {
        $data = [
            'title' => 'Edit Admin',
            'user' => User::where('uuid', $uuid)->where('role', 'admin')->firstOrFail(),
        ];

        return view('dashboard.master.admin.edit', $data);
    }

    public function update(MasterAdminUpdateRequest $request, string $uuid)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('uuid', $uuid)->where('role', 'admin')->firstOrFail();

            if ($request->password) {
                $data['password'] = Hash::make($request->password);
            }

            $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/admins/', 450, 450, $user->image);

            $user->update($data);

            DB::commit();

            return redirect()->route('master.admin.index')->with('success', 'User updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
}
