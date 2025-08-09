<?php

namespace App\Http\Requests;

use App\Models\Pricing;
use Illuminate\Foundation\Http\FormRequest;

class AdminPricingUpdateRequest extends FormRequest
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
        $pricingUUID = $this->route('pricing');
        $pricing = Pricing::where('uuid', $pricingUUID)->firstOrFail();

        return [
            'name' => ['required', 'string', "unique:pricings,name,{$pricing->id}"],
            'minimum' => ['required', 'numeric'],
            'maximum' => ['nullable', 'numeric'],
            'features' => ['required', 'string'],
        ];
    }
}
