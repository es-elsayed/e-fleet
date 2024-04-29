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
        // dd($this->carPricing->price);
        return [
            'id' => $this->id,
            'code' => $this->code,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'from_destination' => [
                'en' => $this->carPricing->destination->fromPlace->name_en . ($this->to_address ? ",$this->to_address" : ''),
                'ar' => $this->carPricing->destination->fromPlace->name_ar . ($this->to_address ? ",$this->to_address" : '')
            ],
            'to_destination' => [
                'en' => $this->carPricing->destination->toPlace->name_en . ($this->to_address ? ",$this->to_address" : ''),
                'ar' => $this->carPricing->destination->toPlace->name_ar . ($this->to_address ? ",$this->to_address" : '')
            ],
            'price_amount' =>  $this->carPricing->price,
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
