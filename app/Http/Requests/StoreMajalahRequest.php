<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMajalahRequest extends FormRequest
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
            'name' => 'require|min:10',
            'cover' => 'require|image|mimes:jpeg,png,jpg|max:2048',
            'slug' => 'require|min:10',
            'file' => 'require|mimes:pdf|max:2048'
        ];
    }
}
