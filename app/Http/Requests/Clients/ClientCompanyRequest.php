<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_name' => 'nullable|string|max:255',
            'client_address_id' => 'nullable|exists:client_addresses,id',
            'nip' => 'nullable|regex:/^\d{10}$/',
            'regon' => 'nullable|regex:/^\d{9,14}$/',
            'krs' => 'nullable|regex:/^\d{10}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'company_name.string' => 'Nazwa firmy musi być tekstem.',
            'company_name.max'    => 'Nazwa firmy nie może mieć więcej niż 255 znaków.',

            'client_address_id.exists' => 'Podany adres klienta nie istnieje.',

            'nip.regex' => 'NIP musi składać się z 10 cyfr.',

            'regon.regex' => 'REGON musi mieć od 9 do 14 cyfr.',

            'krs.regex' => 'KRS musi składać się z 10 cyfr.',
        ];
    }
}
