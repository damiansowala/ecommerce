<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ActiveStatusEnum;

class ProductEanRequest extends FormRequest
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
            'ean13' => 'nullable|size:13|regex:/^\d{13}$/',
            'ean8'  => 'nullable|size:8|regex:/^\d{8}$/',
            'ean128' => 'nullable|regex:/^\d+$/',
            'ean14' => 'nullable|size:14|regex:/^\d{14}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'ean13.nullable' => 'Numer EAN-13 jest opcjonalny.',
            'ean13.size' => 'Numer EAN-13 musi mieć dokładnie 13 cyfr.',
            'ean13.regex' => 'Numer EAN-13 musi składać się z 13 cyfr.',

            'ean8.nullable' => 'Numer EAN-8 jest opcjonalny.',
            'ean8.size' => 'Numer EAN-8 musi mieć dokładnie 8 cyfr.',
            'ean8.regex' => 'Numer EAN-8 musi składać się z 8 cyfr.',

            'ean128.nullable' => 'Numer EAN-128 jest opcjonalny.',
            'ean128.regex' => 'Numer EAN-128 musi składać się z cyfr.',

            'ean14.nullable' => 'Numer EAN-14 jest opcjonalny.',
            'ean14.size' => 'Numer EAN-14 musi mieć dokładnie 14 cyfr.',
            'ean14.regex' => 'Numer EAN-14 musi składać się z 14 cyfr.',
        ];
    }
}
