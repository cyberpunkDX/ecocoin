<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use App\Trait\FileUpload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use FileUpload;
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => User::where('role', 'admin')->where('id', Auth::id())->first()
        ];

        return view('dashboard.admin.profile.index', $data);
    }

    public function store(AdminProfileStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('role', 'admin')->where('id', Auth::id())->first();

            $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/admins/', 450, 450, $user->image);

            $user->update($data);

            DB::commit();

            return redirect()->route('admin.profile.index')->with('success', 'Admin updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
}
