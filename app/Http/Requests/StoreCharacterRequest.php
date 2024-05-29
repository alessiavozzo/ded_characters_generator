<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'description' => 'required|max:500',
            'attack' => 'required|integer|min:1|max:100',
            'defense' => 'required|integer|min:1|max:100',
            'speed' => 'required|max:5',
            'type_id' => 'nullable|exists:types,id',
            'items' => 'exists:items,id'
        ];
    }
}
