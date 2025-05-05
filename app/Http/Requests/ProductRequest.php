<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ActiveStatusEnum;

class ProductRequest extends FormRequest
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
            'desc' => 'nullable|string',


            'price_netto' => 'nullable|numeric|min:0|max:999999.99',
            'price_brutto' => 'nullable|numeric|min:0|max:999999.99',
            'vat' => 'nullable|numeric|min:0|max:100',


            'cat_id' => 'required|exists:product_categories,id',
            'ean_id' => 'nullable|exists:product_eans,id',
            'params_id' => 'nullable|exists:product_params,id',
            'stock_id' => 'nullable|exists:product_stocks,id',


            'status' => 'required|in:' . implode(',', ActiveStatusEnum::options()),

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'           => 'Nazwa produktu jest wymagana.',
            'name.string'             => 'Nazwa produktu musi być tekstem.',
            'name.max'                => 'Nazwa produktu nie może mieć więcej niż 255 znaków.',

            'desc.string'             => 'Opis musi być tekstem.',

            'price_netto.numeric'     => 'Cena netto musi być liczbą.',
            'price_netto.min'         => 'Cena netto nie może być mniejsza niż 0.',
            'price_netto.max'         => 'Cena netto nie może być większa niż 999999,99.',

            'price_brutto.numeric'    => 'Cena brutto musi być liczbą.',
            'price_brutto.min'        => 'Cena brutto nie może być mniejsza niż 0.',
            'price_brutto.max'        => 'Cena brutto nie może być większa niż 999999,99.',

            'vat.numeric'             => 'Wartość VAT musi być liczbą.',
            'vat.min'                 => 'Wartość VAT nie może być mniejsza niż 0.',
            'vat.max'                 => 'Wartość VAT nie może być większa niż 100.',

            'cat_id.required'         => 'Kategoria produktu jest wymagana.',
            'cat_id.exists'           => 'Wybrana kategoria produktu jest nieprawidłowa.',

            'ean_id.exists'           => 'EAN produktu jest nieprawidłowy.',

            'params_id.exists'        => 'Wybrane parametry produktu są nieprawidłowe.',

            'stock_id.exists'         => 'Identyfikator stanu magazynowego jest nieprawidłowy.',

            'status.required'         => 'Status produktu jest wymagany.',
            'status.in'               => 'Wybrany status produktu jest nieprawidłowy.',
        ];
    }
}
