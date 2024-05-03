<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationDetailsResource extends JsonResource
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
            'destination' => [
                'en'=>$this->fromPlace->name_en . ' - ' . $this->toPlace->name_en ,
                'ar'=>$this->fromPlace->name_ar . ' - ' . $this->toPlace->name_ar ,
            ],
            'amount' => $this->price,
            'distance' => $this->distance,
            'is_active' => $this->is_active,
        ];
    }
}
