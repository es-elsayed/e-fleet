<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Site\DestinationDetailsResource;
use App\Http\Resources\Site\ListPriceResource;
use App\Models\Car;
use App\Models\Destination;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarPriceController extends Controller
{
    public function __invoke()
    {
        $cars =  Car::all()->append('prices');
        return Inertia::render('Site/Car/ListPrices',[
            'destinations' => DestinationDetailsResource::collection(Destination::isActive()->orderBy('from_place_id')->get()),
            'items'=>ListPriceResource::collection($cars)
        ]);
    }
}
