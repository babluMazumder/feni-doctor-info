<?php

namespace App\Http\Requests\BloodDonor;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class BloodDonorStoreRequest extends FormRequest
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
        //     'name'              => 'required|string|max:255',
        // 'email'             => 'required|email|unique:blood_donors,email',
        // 'phone'             => 'required|string|max:20|unique:blood_donors,phone',
        // 'address'           => 'required|string|max:255',
        // 'district'          => 'required|string|max:100',
        // 'last_donation_date'=> 'nullable|date|before_or_equal:today',
        // 'gender'            => 'required',
        // 'blood_group'       => 'required',
        // 'availability'      => 'required',
        // 'status'            => 'required'


        ];
    }
}











?>
