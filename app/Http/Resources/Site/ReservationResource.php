<?php

namespace App\Http\Resources\Site;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'code' => $this->code,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'from_destination' => [
                'en' => $this->fromDestination->name_en . ($this->to_address ? ",$this->to_address" : ''),
                'ar' => $this->fromDestination->name_ar . ($this->to_address ? ",$this->to_address" : '')
            ],
            'to_destination' => [
                'en' => $this->toDestination->name_en . ($this->to_address ? ",$this->to_address" : ''),
                'ar' => $this->toDestination->name_ar . ($this->to_address ? ",$this->to_address" : '')
            ],
            'customer_arrived_at' => Carbon::parse($this->customer_arrived_at)->format('Y-m-d @ (g:i A)'),
            'driver_arrived_at' => Carbon::parse($this->driver_arrived_at)->format('Y-m-d @ (g:i A)'),
            'people_number' => $this->people_number,
            'car_id' => $this->car_id,
            'attachment' => $this->attachment,
            'note' => $this->note,
            'status' => $this->status,
            'is_prepaid' => $this->is_prepaid,

        ];
    }
}
