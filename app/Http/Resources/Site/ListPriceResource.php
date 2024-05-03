<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListPriceResource extends JsonResource
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
            'name' => $this->name,
            'prices' => $this->prices,
            'image_url' =>"/$this->image",
            'alt' =>[
                'en'=> $this->name['en'].' image',
                'ar'=> $this->name['ar'].' image',
            ],
            'stars' => $this->stars
        ];
    }
}
