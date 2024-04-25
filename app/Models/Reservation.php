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
        'destination_id',
        'from_address',
        'to_address',
        'customer_arrived_at',
        'driver_arrived_at',
        'people_number',
        'car_id',
        'attachment',
        'note',
        'status',
        'is_prepaid',

        // 'arrival_time',
        // 'departure_time',
    ];
    const CODE_PREFIX = "RS-";
    const CODE_SUFFIX = "";

    /**
     * Get the fromDestination that owns the Reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

}
