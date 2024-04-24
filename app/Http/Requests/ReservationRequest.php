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
        // dd(\Carbon\Carbon::parse($this->driver_arrived_at)->format());
        return [
            // 'code' => '',
            'full_name' => 'required|min:3|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|min:9|max:20',
            'from_destination_id' => 'required|exists:destinations,id',
            'to_destination_id' => 'required|exists:destinations,id',
            'from_address' => 'nullable|string',
            'to_address' => 'nullable|string',
            'customer_arrived_at' => 'required|date',
            'driver_arrived_at' => 'required|date',
            'people_number' => 'required|integer|min:0|max:50',
            'attachment' => 'nullable|mimes:png,jpg,pdf',
            'note' => 'nullable|string',
        ];
    }
}
// $table->string('code')->nullable();
// $table->string('name');
// $table->string('email')->nullable();
// $table->string('phone');
// customer_arrived_at
// driver_arrived_at
// $table->foreignId('from_destination_id')->constrained('destinations');
// $table->string('from_address')->nullable();
// $table->foreignId('to_destination_id')->constrained('destinations');
// $table->string('to_address')->nullable();

// $table->integer('people_number');
// $table->foreignId('car_id')->constrained('cars');
// $table->string('attachment');
// $table->text('note');
// $table->enum('status', ['pending', 'accepted', 'not-accepted', 'failed', 'done'])->default('pending');
// $table->boolean('is_prepaid')->default(0);
