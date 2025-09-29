<?php

namespace App\Http\Requests\Category;

use App\Enums\Status;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
          'title' => ['required', 'string', 'max:100'],
            'position' => ['nullable', 'integer'],
            'status' => ['required', 'in:0,1'],
        ];
    }
}











?>
