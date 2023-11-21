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
            'name' => 'string|max:255',
            'microchip_number' => 'integer|digits:15|unique:animals',
            'weight' => 'integer|sometimes',
            'age' => 'integer|sometimes',
            'color' => 'string|max:255',
            'gender' => 'string|max:255',
            'animal_type_id' => 'integer|exists:animal_types,id',
            'breed_id' => 'integer|exists:breeds,id',
            'owner_id' => 'integer|exists:owners,id'
        ];
    }
}
