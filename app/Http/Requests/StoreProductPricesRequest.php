<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPricesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'prices' => 'required|array',
            'prices.*.price_type' => 'required|in:retail,wholesale,online',
            'prices.*.net_price' => 'required|numeric|min:0',
            'prices.*.gross_price' => 'required|numeric|min:0',
            'prices.*.margin' => 'required|numeric|min:0',
            'prices.*.min_purchase' => 'required|integer|min:1',
            'prices.*.sales_method_id' => 'required|exists:settings_sales_method,id',
        ];
    }

    public function messages(): array
    {
        return [
            'prices.required'              => 'Ceny są wymagane.',
            'prices.array'                 => 'Ceny muszą być tablicą.',

            'prices.*.price_type.required' => 'Typ ceny jest wymagany.',
            'prices.*.price_type.in'       => 'Typ ceny musi być jednym z następujących: retail, wholesale, online.',

            'prices.*.net_price.required'  => 'Cena netto jest wymagana.',
            'prices.*.net_price.numeric'   => 'Cena netto musi być liczbą.',
            'prices.*.net_price.min'       => 'Cena netto nie może być mniejsza niż 0.',

            'prices.*.gross_price.required' => 'Cena brutto jest wymagana.',
            'prices.*.gross_price.numeric' => 'Cena brutto musi być liczbą.',
            'prices.*.gross_price.min'     => 'Cena brutto nie może być mniejsza niż 0.',

            'prices.*.margin.required'     => 'Marża jest wymagana.',
            'prices.*.margin.numeric'      => 'Marża musi być liczbą.',
            'prices.*.margin.min'          => 'Marża nie może być mniejsza niż 0.',

            'prices.*.min_purchase.required' => 'Minimalna ilość zakupu jest wymagana.',
            'prices.*.min_purchase.integer' => 'Minimalna ilość zakupu musi być liczbą całkowitą.',
            'prices.*.min_purchase.min'    => 'Minimalna ilość zakupu nie może być mniejsza niż 1.',

            'prices.*.sales_method_id.required' => 'Metoda sprzedaży jest wymagana.',
            'prices.*.sales_method_id.exists'   => 'Wybrana metoda sprzedaży jest nieprawidłowa.',
        ];
    }
}
