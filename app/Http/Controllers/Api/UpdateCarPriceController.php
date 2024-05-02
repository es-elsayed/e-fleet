<?php

namespace App\Http\Controllers\Api;

use App\Enums\CarPricing as EnumsCarPricing;
use App\Http\Controllers\Controller;
use App\Http\Resources\Site\DestinationPriceResource;
use App\Models\Car;
use App\Models\CarPricing;
use App\Models\Destination;
use Illuminate\Http\Request;

class UpdateCarPriceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(?int $car = null)
    {
        $message = '';
        if ($car) {
            $car = Car::findOrFail($car);
            $car->update(['pricing_type' => request('type', EnumsCarPricing::Normal)]);
            $message = 'update' . $car->name . ' pricing';
        } else {
            $cars = Car::all();
            $cars->each(function ($car) {
                $car->update(['pricing_type' => request('type', EnumsCarPricing::Normal)]);
            });
            $message = 'update all car pricing';
        }
        return back()->with('message', $message);
    }
}
