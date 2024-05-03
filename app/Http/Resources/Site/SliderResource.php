<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => [
                'en' => $this->title_en,
                'ar' => $this->title_ar,
            ],
            'description' => [
                'en' => $this->description_en,
                'ar' => $this->description_ar,
            ],
            'action_title' => [
                'en' => $this->action_title_en,
                'ar' => $this->action_title_ar,
            ],
            'action_url' => $this->action_url,
            'image_url' =>"/$this->image",
            'alt' => [
                'en' => $this->alt_en,
                'ar' => $this->alt_ar,
            ],
            'is_active' => (bool) $this->is_active,
        ];
    }
}
