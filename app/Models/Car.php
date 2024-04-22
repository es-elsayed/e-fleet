<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    ];
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

    // public function insurance()
    // {
    //     return $this->hasOne(Insurance::class);
    // }
}
