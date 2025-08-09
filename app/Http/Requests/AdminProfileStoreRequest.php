<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminProfileStoreRequest extends FormRequest
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
        $user = User::where('role', 'admin')->where('id', Auth::id())->first();

        return [
            'name' => ['required', 'string', 'max:255'],
            'dial_code' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255', "unique:users,phone,{$user->id}"],
            'image' => [
                'nullable',
                'image',          // Must be an image file
                'mimes:jpg,jpeg,png,gif', // Allowed file types
                'max:2048',       // Maximum file size in kilobytes (2MB)
            ],
            'gender' => ['nullable', 'string', 'max:255'],
            'date_of_birth' => ['nullable', 'date'],
        ];
    }
}
