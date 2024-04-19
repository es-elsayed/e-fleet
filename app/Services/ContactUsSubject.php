<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;

class ContactUsSubject extends ServiceProvider
{
    public static function types()
    {
        return [
            ['id' => 'reservation', 'name' => 'Reservation'],
            ['id' => 'payment', 'name' => 'Payment'],
            ['id' => 'car', 'name' => 'Car'],
            ['id' => 'cancelation', 'name' => 'Cancelation'],
            ['id' => 'other', 'name' => 'Other'],
        ];
    }
    public static function ids()
    {
        return [
            'reservation',
            'payment',
            'car',
            'cancelation',
            'other',
        ];
    }
}
