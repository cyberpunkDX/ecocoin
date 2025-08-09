<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminWalletStoreRequest;
use App\Http\Requests\AdminWalletUpdateRequest;
use App\Models\Wallet;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
    use FileUpload;
    public function index()
    {
        $wallets = Wallet::latest()->get();

        $data = [
            'title' => 'Wallets',
            'wallets' => $wallets
        ];

        return view('dashboard.admin.wallet.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Wallet',
        ];

        return view('dashboard.admin.wallet.create', $data);
    }

    public function store(AdminWalletStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $data['uuid'] = str()->uuid();

            $createWallet = Wallet::create($data);

            if (!Wallet::create($data)) {
                return redirect()->back()->with('error', 'Something went wrong. Please try again.');
            }

            $createWallet->update([
                'image' => $this->imageInterventionUploadFile($request, 'image', '/uploads/wallets/', 450, 450),
                'logo' => $this->imageInterventionUploadFile($request, 'logo', '/uploads/wallets/', 150, 150),
            ]);

            DB::commit();
            return redirect()->route('admin.wallet.index')->with('success', 'Wallet created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function show(string $uuid)
    {
        $wallet = Wallet::where('uuid', $uuid)->firstOrFail();

        $data = [
            'title' => 'Wallet Detail',
            'wallet' => $wallet
        ];

        return view('dashboard.admin.wallet.show', $data);
    }

    public function edit(string $uuid)
    {
        $wallet = Wallet::where('uuid', $uuid)->firstOrFail();

        $data = [
            'title' => 'Edit Wallet',
            'wallet' => $wallet
        ];

        return view('dashboard.admin.wallet.edit', $data);
    }

    public function update(AdminWalletUpdateRequest $request, string $uuid)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $wallet = Wallet::where('uuid', $uuid)->firstOrFail();

            if ($request->has('image')) {
                $data['image'] = $this->imageInterventionUpdateFile($request, 'image', '/uploads/wallets/', 450, 450, $wallet->image);
            }

            if ($request->has('logo')) {
                $data['logo'] = $this->imageInterventionUpdateFile($request, 'logo', '/uploads/wallets/', 150, 150, $wallet->logo);
            }

            $wallet->update($data);

            DB::commit();
            return redirect()->route('admin.wallet.index')->with('success', 'Wallet updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function delete(string $uuid)
    {
        DB::beginTransaction();
        try {
            $wallet = Wallet::where('uuid', $uuid)->firstOrFail();
            $this->deleteFile($wallet->image);
            $this->deleteFile($wallet->logo);
            $wallet->delete();
            DB::commit();
            return redirect()->route('admin.wallet.index')->with('success', 'Wallet deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
