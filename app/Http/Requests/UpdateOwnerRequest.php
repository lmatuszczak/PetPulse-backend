<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOwnerRequest extends FormRequest
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
        return [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'company_name' => 'string|max:255',
            'nip' => 'regex:/^[0-9]{10}$/|unique:owners',
            'regon' => 'regex:/^[0-9]{9}$/|unique:owners',
            'postal_code' => 'regex:/^([0-9]{2})-([0-9]{3})$/',
            'city' => 'string|max:255',
            'street' => 'string|max:255',
            'phone' => 'phone:PL',
            'user_id' => '|integer|exists:users,id|unique:owners',
        ];
    }
}
