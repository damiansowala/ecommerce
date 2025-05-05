<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsSeoRequest extends FormRequest
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
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'canonical_url' => 'nullable|url|max:255',
            'robots' => 'nullable|string|in:index, follow,noindex, follow,index, nofollow,noindex, nofollow',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string|max:255',
            'og_image' => 'nullable|url|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'meta_title.string'         => 'Tytuł meta musi być tekstem.',
            'meta_title.max'            => 'Tytuł meta nie może mieć więcej niż 255 znaków.',

            'meta_description.string'   => 'Opis meta musi być tekstem.',
            'meta_description.max'      => 'Opis meta nie może mieć więcej niż 255 znaków.',

            'meta_keywords.string'      => 'Słowa kluczowe meta muszą być tekstem.',

            'canonical_url.url'         => 'Adres URL kanoniczny musi być prawidłowym URL-em.',
            'canonical_url.max'         => 'Adres URL kanoniczny nie może mieć więcej niż 255 znaków.',

            'robots.string'             => 'Pole robots musi być tekstem.',
            'robots.in'                 => 'Pole robots musi zawierać jedną z wartości: index, follow, noindex, follow, index, nofollow, noindex, nofollow.',

            'og_title.string'           => 'Tytuł Open Graph musi być tekstem.',
            'og_title.max'              => 'Tytuł Open Graph nie może mieć więcej niż 255 znaków.',

            'og_description.string'     => 'Opis Open Graph musi być tekstem.',
            'og_description.max'        => 'Opis Open Graph nie może mieć więcej niż 255 znaków.',

            'og_image.url'              => 'Adres URL obrazu Open Graph musi być prawidłowym URL-em.',
            'og_image.max'              => 'Adres URL obrazu Open Graph nie może mieć więcej niż 255 znaków.',
        ];
    }
}
