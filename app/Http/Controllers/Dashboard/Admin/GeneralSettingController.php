<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralSettingUpdateRequest;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'General Settings',
            'generalSetting' => GeneralSetting::first()
        ];

        return view('dashboard.admin.general_setting.index', $data);
    }

    public function update(GeneralSettingUpdateRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            GeneralSetting::updateOrCreate(
                ['id' => 1],
                $data
            );

            DB::commit();

            return redirect()->route('admin.general.setting.index')->with('success', 'General Setting updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('admin.general.setting.index')->with('error', 'Failed to update general setting');
        }
    }
}
