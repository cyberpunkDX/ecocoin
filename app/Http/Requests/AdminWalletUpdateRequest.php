<?php

namespace App\Http\Requests;

use App\Models\Wallet;
use Illuminate\Foundation\Http\FormRequest;

class AdminWalletUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $walletUUID = $this->route('wallet');
        $wallet = Wallet::where('uuid', $walletUUID)->first();

        return [
            'name' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100', "unique:wallets,address,{$wallet->id}"],
            'image' => ['nullable', 'file', 'image', 'max:2048'],
            'logo' => ['nullable', 'file', 'image', 'max:2048'],
            'price' => ['nullable', 'numeric'],
            'network' => ['nullable', 'string', 'max:50'],
        ];
    }
}
