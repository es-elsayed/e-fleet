<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => 'required',
            'model' => 'required',
            'engine' => 'required',
            'quantity' => 'required',
            'price_per_day' => 'required',
            'insurance_status' => 'required',
            'status' => 'required',
            'reduce' => 'required',
            'stars' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
