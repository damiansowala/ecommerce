<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStockRequest extends FormRequest
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
            'quantity' => 'nullable|integer|min:0',
            'low_stock' => 'nullable|integer|min:0', // Flaga 0 lub 1
            'notifications' => 'boolean',  // Flaga powiadomień
        ];
    }

    public function messages(): array
    {
        return [
            'quantity.integer'    => 'Ilość musi być liczbą całkowitą.',
            'quantity.min'        => 'Ilość nie może być mniejsza niż 0.',

            'low_stock.integer'   => 'Minimalny stan magazynowy musi być liczbą całkowitą.',
            'low_stock.min'       => 'Minimalny stan magazynowy nie może być mniejszy niż 0.',

            'notifications.boolean' => 'Flaga powiadomień musi być wartością logiczną (true/false).',
        ];
    }
}
