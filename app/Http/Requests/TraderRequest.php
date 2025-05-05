<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:traders,phone,' . $this->route('trader'),
            'email' => 'required|email|max:255|unique:traders,email,' . $this->route('trader'),
            'commission' => 'nullable|numeric|min:0|max:100',
            'status' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'            => 'Nazwa jest wymagana.',
            'name.string'              => 'Nazwa musi być tekstem.',
            'name.max'                 => 'Nazwa nie może mieć więcej niż 255 znaków.',

            'phone.required'           => 'Numer telefonu jest wymagany.',
            'phone.string'             => 'Numer telefonu musi być tekstem.',
            'phone.max'                => 'Numer telefonu nie może mieć więcej niż 20 znaków.',
            'phone.unique'             => 'Podany numer telefonu jest już używany.',

            'email.required'           => 'Adres e-mail jest wymagany.',
            'email.email'              => 'Adres e-mail musi być poprawnym adresem.',
            'email.max'                => 'Adres e-mail nie może mieć więcej niż 255 znaków.',
            'email.unique'             => 'Podany adres e-mail jest już używany.',

            'commission.numeric'       => 'Procent prowizji musi być liczbą.',
            'commission.min'           => 'Procent prowizji nie może być mniejszy niż 0.',
            'commission.max'           => 'Procent prowizji nie może być większy niż 100.',

            'status.required'          => 'Status jest wymagany.',
            'status.boolean'           => 'Status musi być wartością logiczną (true/false).',
        ];
    }
}
