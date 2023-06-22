<?php

namespace App\Http\Requests\Admin\KepalaDinas;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKepalaDinasRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'sambutan' => 'required|min:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
