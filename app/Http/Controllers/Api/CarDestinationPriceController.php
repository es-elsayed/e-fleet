<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Site\DestinationPriceResource;
use App\Models\Car;
use App\Models\CarPricing;
use App\Models\Destination;
use Illuminate\Http\Request;

class CarDestinationPriceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Car $car, Destination $destination)
    {
        $price = $car->pricings->where('destination_id', $destination->id)->first();
        // dd($price);
        return new DestinationPriceResource($price);
    }
}
