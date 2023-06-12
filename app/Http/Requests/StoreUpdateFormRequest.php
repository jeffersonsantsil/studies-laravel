<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:65',
                'min:3'
            ],
            'email' => [
                'email',
                'required',
                'unique:users'
            ],
            'password' => [
                'nullable',
                'max: 15',
                'min: 6',
                'required'
            ]
        ];
    }
}
