<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
            'name' => 'string|required|max:255',
            'microchip_number' => 'integer|digits:15|required|unique:animals',
            'weight' => 'integer|required',
            'age' => 'integer|required',
            'color' => 'string|required|max:255',
            'gender' => 'string|required|max:255',
            'animal_type_id' => 'integer|required|exists:animal_types,id',
            'breed_id' => 'integer|required|exists:breeds,id',
            'owner_id' => 'integer|required|exists:owners,id'
        ];
    }
}
