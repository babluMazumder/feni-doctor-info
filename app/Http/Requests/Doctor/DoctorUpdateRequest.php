<?php

namespace App\Http\Requests\Doctor;

use App\Enums\Status;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {

        // dd($this->all());
        return [
           'name'            => 'required|string|max:150',
            'specialization'  => 'nullable|string|max:150',
            'qualification'   => 'nullable|string|max:200',
            'designation'     => 'nullable|string|max:150',
            'hospital_name'   => 'nullable|string|max:200',
            'visiting_hours'  => 'nullable|string|max:100',
            'days'            => 'nullable|string|max:100',
            'room_no'         => 'nullable|string|max:150',
            'visiting_fee'    => 'nullable|numeric|min:0|max:999999.99',
            'contact_number'  => 'nullable|string|max:20',
            'profile_photo'   => 'nullable',
            'slug'            => 'nullable|string|unique:doctors,slug',
            'category_id'     => 'nullable',
            'status'          => 'required|in:0,1',
        ];
    }
}











?>
