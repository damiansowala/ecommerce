<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsSalesMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:settings_sales_method,name',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Pole nazwy jest wymagane.',
            'name.unique' => 'Metoda sprzedaży o takiej nazwie już istnieje.',
        ];
    }
}
