<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'  => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'postal_code'   => 'required|string|regex:/^\d{2}-\d{3}$/',
            'city'          => 'required|string|max:255',
            'nip'           => 'required|digits:10',
            'krs'           => 'nullable|digits:10',
            'regon'         => 'required|digits_between:9,14',
            'code'          => 'required|string|max:50|unique:manufacturers,code',
            'status'        => 'required|boolean',
            'contact_person' => 'nullable|string|max:255', // Osoba kontaktowa
            'phone'          => 'nullable|string|regex:/^(\+?(\d{1,3}))?(\d{9,15})$/', // Numer telefonu
            'email'          => 'nullable|email|max:255', // E-mail
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'           => 'Nazwa firmy jest wymagana.',
            'street_address.required' => 'Ulica i numer są wymagane.',
            'postal_code.required'    => 'Kod pocztowy jest wymagany.',
            'postal_code.regex'       => 'Kod pocztowy musi mieć format XX-XXX.',
            'city.required'           => 'Miasto jest wymagane.',
            'nip.required'            => 'NIP jest wymagany.',
            'nip.digits'              => 'NIP musi składać się z 10 cyfr.',
            'krs.digits'              => 'KRS musi składać się z 10 cyfr.',
            'regon.required'          => 'REGON jest wymagany.',
            'regon.digits_between'    => 'REGON musi mieć od 9 do 14 cyfr.',
            'code.required'           => 'Kod producenta jest wymagany.',
            'code.unique'             => 'Kod producenta musi być unikalny.',
            'status.required'         => 'Status jest wymagany.',
            'status.boolean'          => 'Status musi być wartością logiczną (true/false).',
            'contact_person.string'   => 'Osoba kontaktowa musi być tekstem.',
            'contact_person.max'      => 'Osoba kontaktowa nie może mieć więcej niż 255 znaków.',
            'phone.string'     => 'Numer telefonu musi być tekstem.',
            'phone.regex'      => 'Numer telefonu musi mieć poprawny format.',
            'email.email'             => 'Adres e-mail musi być poprawnym adresem.',
            'email.max'               => 'Adres e-mail nie może mieć więcej niż 255 znaków.',
        ];
    }
}
