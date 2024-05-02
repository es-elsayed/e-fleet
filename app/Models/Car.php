<?php

namespace App\Models;

use App\Http\Resources\Site\DestinationPriceResource;
use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Car extends Model
{
    use HasFactory, scopeActive;

    protected $fillable = [
        'code',
        'brand_id',
        'category_id',
        'model_en',
        'model_ar',
        'image',
        'is_active',
        'is_available',
        'reduce',
        'stars',
        'pricing_type'
    ];
    protected $appends = ['name'];

    public function name(): Attribute
    {
        return Attribute::make(
            get: function () {
                return  [
                    'en' => $this->brand->name_en . " " . $this->model_en,
                    'ar' => $this->brand->name_ar . " " . $this->model_ar,
                ];
            },
        );
    }

    public function prices(): Attribute
    {
        return Attribute::make(
            get: fn () => DestinationPriceResource::collection(CarPricing::where('car_id', $this->id)->where('type', $this->pricing_type)->get())
            // get: fn () => DestinationPriceResource::collection($this->pricings->where('type', $this->pricing_type))
        );
    }

    /**
     * Get all of the reservations for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function reservations(): HasManyThrough
    {
        return $this->hasManyThrough(Reservation::class, CarPricing::class);
    }

    // public function reservations()
    // {
    //     return $this->hasMany(Reservation::class);
    // }

    public function scopeIsAvailable($query)
    {
        return $query->where('is_available', 1);
    }

    /**
     * Get the brand that owns the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    /**
     * Get the category that owns the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get all of the pricings for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pricings(): HasMany
    {
        return $this->hasMany(CarPricing::class, 'car_id', 'id');
    }

    // public function scopeCurrentPrice($query)
    // {
    //     return $query->pricing()->where('type', $this->pricing_type);
    // }
}
