<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationPriceResource extends JsonResource
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
            'amount' => $this->price,
            'type' => $this->type,
            'destination_id' => $this->destination->id,
            'from' => PlaceResource::make($this->destination->fromPlace),
            'to' => PlaceResource::make($this->destination->toPlace),
            'destination' => [
                'en'=>$this->destination->fromPlace->name_en . ' - ' . $this->destination->toPlace->name_en ,
                'ar'=>$this->destination->fromPlace->name_ar . ' - ' . $this->destination->toPlace->name_ar ,
            ],
        ];
    }
}
