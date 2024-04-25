<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
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
            'from_destination' => new PlaceResource($this->fromPlace),
            'to_destination' => new PlaceResource($this->toPlace),
            'distance' => $this->distance,
            'is_active' => $this->is_active,
        ];
    }
}