<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientCompanyAddressRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        // Mapowanie pól formularza na standardowe pola dla walidacji
        $this->merge([
            'street' =>  $this->input('company_street'),
            'building_number' =>  $this->input('company_building_number'),
            'premises_number' => $this->input('company_premises_number'),
            'zip_code' =>  $this->input('company_zip_code'),
            'city' => $this->input('company_city'),
            'country' => $this->input('company_country'),
        ]);
    }

    public function rules()
    {
        return [
            'street' => 'required|string|max:255',
            'building_number' => 'required|string|max:50',
            'premises_number' => 'nullable|string|max:50',
            'zip_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'street.required' => 'Ulica jest wymagana.',
            'street.string'   => 'Ulica musi być tekstem.',
            'street.max'      => 'Ulica nie może mieć więcej niż 255 znaków.',

            'building_number.required' => 'Numer budynku jest wymagany.',
            'building_number.string'   => 'Numer budynku musi być tekstem.',
            'building_number.max'      => 'Numer budynku nie może mieć więcej niż 50 znaków.',

            'premises_number.string' => 'Numer lokalu musi być tekstem.',
            'premises_number.max'    => 'Numer lokalu nie może mieć więcej niż 50 znaków.',

            'zip_code.required' => 'Kod pocztowy jest wymagany.',
            'zip_code.string'   => 'Kod pocztowy musi być tekstem.',
            'zip_code.max'      => 'Kod pocztowy nie może mieć więcej niż 20 znaków.',

            'city.required' => 'Miasto jest wymagane.',
            'city.string'   => 'Miasto musi być tekstem.',
            'city.max'      => 'Miasto nie może mieć więcej niż 255 znaków.',

            'country.required' => 'Kraj jest wymagany.',
            'country.string'   => 'Kraj musi być tekstem.',
            'country.max'      => 'Kraj nie może mieć więcej niż 255 znaków.',
        ];
    }
}
