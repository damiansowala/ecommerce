<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientNoteRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'note' => 'required|string|max:65535',
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'Pole użytkownika jest wymagane.',
            'user_id.exists'   => 'Wybrany użytkownik nie istnieje.',

            'note.required'    => 'Notatka jest wymagana.',
            'note.string'      => 'Notatka musi być tekstem.',
            'note.max'         => 'Notatka nie może mieć więcej niż 65535 znaków.',
        ];
    }
}
