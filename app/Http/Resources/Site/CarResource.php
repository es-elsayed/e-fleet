<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'brand' => [
                'en' => $this->brand->name_en,
                'ar' => $this->brand->name_ar,
            ],
            'name' => $this->name,
            'category' => [
                'en' => $this->category->name_en,
                'ar' => $this->category->name_ar,
            ],
            'model' => [
                'en' => $this->model_en,
                'ar' => $this->model_ar,
            ],
            'engine' => $this->engine,
            'price_per_day' => $this->price_per_day,
            'image_url' => "/$this->image",
            'alt' => [
                'en'=> $this->name['en']. ' image',
                'ar'=> $this->name['ar']. ' صورة',
            ],
            'quantity' => $this->quantity,
            'status' => $this->status,
            'available' => $this->available,
            'reduce' => $this->reduce,
            'stars' => $this->stars,
        ];
    }
}
