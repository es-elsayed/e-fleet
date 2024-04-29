<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'full_name' => 'required|min:3|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|min:9|max:20',
            'car_pricing_id' => 'required|exists:car_pricings,id',
            'from_address' => 'nullable|string',
            'to_address' => 'nullable|string',
            'customer_arrived_at' => 'required|date|after_or_equal:today',
            'driver_arrived_at' => 'required|date',
            'people_number' => 'required|integer|min:0|max:50',
            'attachment' => 'nullable|mimes:png,jpg,pdf',
            'note' => 'nullable|string',
        ];
    }
}
