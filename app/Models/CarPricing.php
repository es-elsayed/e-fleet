<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_destination_id',
        'to_destination_id',
        'car_id',
        'price',
        'type',
    ];
}
