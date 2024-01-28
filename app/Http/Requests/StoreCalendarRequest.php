<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalendarRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|max:255',
            'description' => 'string',
            'start_date' => 'date|required',
            'end_date' => 'date|required',
            'user_id' => 'numeric|required|exists:users,id',
            'animal_id' => 'numeric|required|exists:animals,id',
        ];
    }
}
