<?php

namespace App\Http\Requests\Admin\Location;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255',
            'category' => 'required|in:1,2,3,4,5',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'explanation' => 'nullable|min:3|max:255',
            'thumbnail' => 'nullable|max:1024|image|mimetypes:image/jpg,image/jpeg,image/png|mimes:jpg,jpeg,png|dimensions:min_width=50,min_height=50',
        ];
    }
}
