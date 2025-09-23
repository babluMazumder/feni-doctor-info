<?php

namespace App\Http\Requests\Hospital;

use App\Enums\Status;
use App\Enums\HospitalType;
use Illuminate\Foundation\Http\FormRequest;

class hospitalStoreRequest extends FormRequest
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

        // dd($this->all());
        return [
           'name'            => ['required', 'string', 'max:255'],
            'type'            => ['required'],
            'registration_no' => ['nullable', 'string', 'max:100'],
            'email'           => ['required', 'email', 'max:255', 'unique:hospitals,email'],
            'phone'           => ['required', 'string', 'max:20'],
            'address'         => ['required', 'string'],
            'district'        => ['required', 'string', 'max:100'],
            // 'latitude'        => ['nullable', 'numeric', 'between:-90,90'],
            // 'longitude'       => ['nullable', 'numeric', 'between:-180,180'],
            'website_url'     => ['nullable', 'url'],
             'status' => 'required|in:0,1',
            'description'     => ['nullable', 'string'],




        ];
    }
}











?>
