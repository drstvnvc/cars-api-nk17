<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'sometimes|string|min:2|max:255',
            'model' => 'sometimes|string|min:2|max:255',
            'year' => 'sometimes|integer|min:1900|max:2022',
            'max_speed' => 'sometimes|integer|min:20|max:300',
            'is_automatic' => 'sometimes|boolean',
            'engine' => 'sometimes|string|max:255',
            'number_of_doors' => 'sometimes|integer|min:2|max:5',
        ];
    }
}
