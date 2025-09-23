<?php

namespace App\Http\Requests\BloodBank;

use Illuminate\Foundation\Http\FormRequest;

class bloodBankUpdateRequest extends FormRequest
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

        return [
            'name'             => 'required|string|max:255',
            'license_no'       => 'nullable|string|max:100',
            'email'            => 'required',
            'phone'            => 'required|string|max:20',
            'address'          => 'required|string',
            'district'         => 'required|string|max:100',
            // 'latitude'         => 'nullable|numeric|between:-90,90',
            // 'longitude'        => 'nullable|numeric|between:-180,180',
            // 'available_groups' => 'required|json',
            'status'           => 'required|in:0,1',



        ];
    }
}











?>
