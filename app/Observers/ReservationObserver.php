<?php

namespace App\Observers;

use App\Models\Reservation;

class ReservationObserver
{
    /**
     * Handle the Reservation "created" event.
     */
    public function created(Reservation $reservation): void
    {
        $prefix_code = $reservation::CODE_PREFIX ?? '';
        $suffix_code = $reservation::CODE_SUFFIX ??  '';
        $now = now()->format('d-m-y');
        $rand = \Str::random(2);
        $reservation->code = "$prefix_code$reservation->car_id-$reservation->id-$now-$rand$suffix_code";
        $reservation->save();
    }

    /**
     * Handle the Reservation "updated" event.
     */
    public function updated(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "deleted" event.
     */
    public function deleted(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "restored" event.
     */
    public function restored(Reservation $reservation): void
    {
        //
    }

    /**
     * Handle the Reservation "force deleted" event.
     */
    public function forceDeleted(Reservation $reservation): void
    {
        //
    }
}
