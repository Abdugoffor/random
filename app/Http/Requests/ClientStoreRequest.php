<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'name' => 'required',
            'tel' => 'required|numeric|digits:9',
        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Введите имя',
            'tel.required' => 'Введите телефон',
            'tel.numeric' => 'Телефонный номер должен состоять из 9 цифр',
            'tel.digits' => 'Телефонный номер должен состоять из 9 цифр',
        ];
    }
}
