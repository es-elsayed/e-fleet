<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Place extends Model
{
    use HasFactory, scopeActive;

    protected $fillable = [
        'name_en',
        'name_ar',
        'is_active'
    ];

    /**
     * Get all of the destinations for the Place
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function destinations(): HasMany
    {
        return $this->hasMany(Destination::class, 'from_place_id', 'id');
    }

}
