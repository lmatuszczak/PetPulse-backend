<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnimalRequest extends FormRequest
{

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
            'name' => 'string|max:255|sometimes',
            'microchip_number' => 'integer|digits:15|unique:animals|sometimes',
            'weight' => 'integer|sometimes',
            'age' => 'integer|sometimes',
            'color' => 'string|max:255|sometimes',
            'gender' => 'string|max:255|sometimes',
            'animal_type_id' => 'integer|exists:animal_types,id|sometimes',
            'breed_id' => 'integer|exists:breeds,id|sometimes',
            'owner_id' => 'integer|exists:owners,id|sometimes'
        ];
    }
}
