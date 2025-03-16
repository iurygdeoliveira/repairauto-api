<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarUserStoreRequest extends FormRequest
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
            'brand_id' => 'required',
            'car_id' => 'required',
            'plate' => 'required|min:7|max:7',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
