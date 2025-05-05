<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductParamRequest extends FormRequest
{
    public function authorize()
    {
        return true;  // Upewnij się, że autoryzacja jest ustawiona na true, aby umożliwić dostęp
    }

    public function rules()
    {
        return [
            'weight' => 'nullable|numeric|min:0',
            'width' => 'nullable|numeric|min:0',
            'height' => 'nullable|numeric|min:0',
            'length' => 'nullable|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'weight.numeric'    => 'Waga musi być liczbą.',
            'weight.min'        => 'Waga nie może być mniejsza niż 0.',

            'width.numeric'     => 'Szerokość musi być liczbą.',
            'width.min'         => 'Szerokość nie może być mniejsza niż 0.',

            'height.numeric'    => 'Wysokość musi być liczbą.',
            'height.min'        => 'Wysokość nie może być mniejsza niż 0.',

            'length.numeric'    => 'Długość musi być liczbą.',
            'length.min'        => 'Długość nie może być mniejsza niż 0.',
        ];
    }
}
