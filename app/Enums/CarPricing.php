<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum CarPricing: string
{
    case Low = 'low';
    case Normal = 'normal';
    case High = 'high';
    case Temp = 'temp';

    public static function values()
    {
        return array_keys(Arr::keyBy(self::cases(), ['value']));
    }
}
