<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => 'required|max:25',
            'type' => 'nullable|max:25',
            'category' => 'nullable|max:30',
            'weight' => 'nullable|max:30',
            'cost' => 'nullable|max:30',
            'damage_dice' => 'required|max:5',
        ];
    }
}
