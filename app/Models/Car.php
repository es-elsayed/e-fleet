<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

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
     * Get all of the carPricings for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function carPricings(): HasMany
    // {
    //     return $this->hasMany(CarPricing::class, 'car_id', 'id');
    // }

    // public function scopeCurrentPrice($query)
    // {
    //     return $query->carPricings()->where('type', $this->pricing_type);
    // }
}
