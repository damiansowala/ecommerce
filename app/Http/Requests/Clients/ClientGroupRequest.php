<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientGroupRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string|max:500'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nazwa jest wymagana.',
            'name.string'   => 'Nazwa musi być tekstem.',
            'name.max'      => 'Nazwa nie może mieć więcej niż 255 znaków.',

            'desc.string'   => 'Opis musi być tekstem.',
            'desc.max'      => 'Opis nie może mieć więcej niż 500 znaków.',
        ];
    }
}
