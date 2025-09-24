<?php

namespace App\Http\Requests\Ambulance;
use App\Enums\Status;
use App\Enums\AmbulanceType;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AmbulanceStoreRequest extends FormRequest
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
         'service_name'     => ['required', 'string', 'max:255'],
        'ambulance_type'   => ['required', Rule::in(array_column(AmbulanceType::cases(), 'value'))],
        'registration_no'  => ['required', 'string', 'max:100', 'unique:ambulances,registration_no'],
        'driver_name'      => ['required', 'string', 'max:255'],
        'driver_phone'     => ['required', 'string', 'max:20'],
        'phone'            => ['nullable', 'string', 'max:20'],
        'email'            => ['nullable', 'email', 'max:255', 'unique:ambulances,email'],
        'address'          => ['required', 'string', 'max:500'],
        'district'         => ['required', 'string', 'max:255'],
        'latitude'         => ['nullable', 'numeric', 'between:-90,90'],
        'longitude'        => ['nullable', 'numeric', 'between:-180,180'],
        'status'           => ['required', Rule::in(array_column(Status::cases(), 'value'))],
        ];
    }
}











?>
