<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'phone' => 'required',
            'password' => 'required',
            // 'phone1' => ['required', 'string', 'regex:/^\+998\d{9}$/'],
        ];
    }
    public function messages(): array
    {
        return [
            'phone.required' => 'Введите телефон , (+998 94 100 00 00)',
            'password.required' => 'Введите пароль',
        ];
    }
}
