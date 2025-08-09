<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPricingStoreRequest;
use App\Http\Requests\AdminPricingUpdateRequest;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PricingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pricings',
            'pricings' => Pricing::latest()->get()
        ];

        return view('dashboard.admin.pricing.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Pricing',
        ];

        return view('dashboard.admin.pricing.create', $data);
    }

    public function store(AdminPricingStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $data['uuid'] = str()->uuid();

            Pricing::create($data);

            DB::commit();

            return redirect()->route('admin.pricing.index')->with('success', 'Pricing created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show(string $uuid)
    {
        $data = [
            'title' => 'Pricing Detail',
            'pricing' => Pricing::where('uuid', $uuid)->firstOrFail()
        ];

        return view('dashboard.admin.pricing.show', $data);
    }

    public function edit(string $uuid)
    {
        $data = [
            'title' => 'Edit Pricing',
            'pricing' => Pricing::where('uuid', $uuid)->firstOrFail()
        ];

        return view('dashboard.admin.pricing.edit', $data);
    }

    public function update(AdminPricingUpdateRequest $request, string $uuid)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $pricing = Pricing::where('uuid', $uuid)->firstOrFail();

            $pricing->update($data);

            DB::commit();

            return redirect()->route('admin.pricing.index')->with('success', 'Pricing updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete(string $uuid)
    {
        DB::beginTransaction();
        try {
            $pricing = Pricing::where('uuid', $uuid)->firstOrFail();

            $pricing->deposits()->delete();
            $pricing->delete();

            DB::commit();

            return redirect()->route('admin.pricing.index')->with('success', 'Pricing deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
