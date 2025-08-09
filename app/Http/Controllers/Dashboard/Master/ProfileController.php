<?php

namespace App\Http\Controllers\Dashboard\Master;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MasterProfileStoreRequest;
use App\Trait\FileUpload;

class ProfileController extends Controller
{
    use FileUpload;
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'user' => User::where('role', 'master')->where('id', Auth::id())->first()
        ];

        return view('dashboard.master.profile.index', $data);
    }

    public function store(MasterProfileStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $user = User::where('role', 'master')->where('id', Auth::id())->first();

            $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/masters/', 450, 450, $user->image);

            $user->update($data);

            DB::commit();

            return redirect()->route('master.profile.index')->with('success', 'Master updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
}
