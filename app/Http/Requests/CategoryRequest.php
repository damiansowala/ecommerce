<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'cat_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:product_categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'cat_name.required'   => 'Nazwa kategorii jest wymagana.',
            'cat_name.string'     => 'Nazwa kategorii musi być tekstem.',
            'cat_name.max'        => 'Nazwa kategorii nie może mieć więcej niż 255 znaków.',

            'description.string'  => 'Opis musi być tekstem.',

            'parent_id.exists'    => 'Wybrana kategoria nadrzędna jest nieprawidłowa.',
        ];
    }
}
