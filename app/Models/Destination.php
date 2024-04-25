<?php

namespace App\Models;

use App\Traits\scopeActive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Destination extends Model
{
    use HasFactory, scopeActive;

    protected $fillable = [
        'from_place_id',
        'to_place_id',
        'distance',
        'is_active',
    ];

    /**
     * Get the fromPlace that owns the Destination
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromPlace(): BelongsTo
    {
        return $this->belongsTo(Place::class, 'from_place_id');
    }

    /**
     * Get the toPlace that owns the Destination
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toPlace(): BelongsTo
    {
        return $this->belongsTo(Place::class, 'to_place_id');
    }
}
