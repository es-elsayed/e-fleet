<?php

namespace App\Models;

use App\Observers\ReservationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([ReservationObserver::class])]

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'full_name',
        'email',
        'phone',
        'car_pricing_id',
        'from_address',
        'to_address',
        'customer_arrived_at',
        'driver_arrived_at',
        'people_number',
        'attachment',
        'note',
        'status',
        'is_prepaid',

    ];
    const CODE_PREFIX = "RS-";
    const CODE_SUFFIX = "";

    /**
     * Get the carPricing that owns the Reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carPricing(): BelongsTo
    {
        return $this->belongsTo(CarPricing::class);
    }

}
