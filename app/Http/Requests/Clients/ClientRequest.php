<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:clients,email',
            'address_id' => 'nullable|exists:client_addresses,id',
            'company_id' => 'nullable|exists:client_companies,id',
            'client_group_id' => 'nullable|exists:client_groups,id',
            'status' => 'required|string|max:50',
            'client_caretaker_id' => 'nullable|exists:client_caretakers,id',
            'verified' => 'boolean',
            'client_kind' => 'nullable|in:individual,company',
            'client_type' => 'nullable|in:online,retail,wholesale',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'Imię jest wymagane.',
            'first_name.string'   => 'Imię musi być tekstem.',
            'first_name.max'      => 'Imię nie może mieć więcej niż 255 znaków.',

            'last_name.required'  => 'Nazwisko jest wymagane.',
            'last_name.string'    => 'Nazwisko musi być tekstem.',
            'last_name.max'       => 'Nazwisko nie może mieć więcej niż 255 znaków.',

            'phone.required'      => 'Numer telefonu jest wymagany.',
            'phone.string'        => 'Numer telefonu musi być tekstem.',
            'phone.max'           => 'Numer telefonu nie może mieć więcej niż 20 znaków.',

            'email.required'      => 'Adres e-mail jest wymagany.',
            'email.email'         => 'Adres e-mail musi być poprawnym adresem.',
            'email.unique'        => 'Podany adres e-mail jest już zajęty.',

            'address_id.exists'   => 'Podany adres klienta nie istnieje.',
            'company_id.exists'   => 'Podana firma klienta nie istnieje.',
            'client_group_id.exists' => 'Podana grupa klientów nie istnieje.',

            'status.required'     => 'Status jest wymagany.',
            'status.string'       => 'Status musi być tekstem.',
            'status.max'          => 'Status nie może mieć więcej niż 50 znaków.',

            'client_caretaker_id.exists' => 'Podany opiekun klienta nie istnieje.',

            'verified.boolean'    => 'Pole weryfikacji musi być wartością logiczną (true/false).',

            'client_kind.in'      => 'Rodzaj klienta musi być jedną z wartości: individual, company.',

            'client_type.in'      => 'Typ klienta musi być jedną z wartości: online, retail, wholesale.',
        ];
    }
}
