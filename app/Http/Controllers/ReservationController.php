<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Http\Resources\Site\CarResource;
use App\Http\Resources\Site\DestinationResource;
use App\Http\Resources\Site\DestinationFromDetailsResource;
use App\Http\Resources\Site\PlaceResource;
use App\Http\Resources\Site\ReservationResource;
use App\Models\Car;
use App\Models\Destination;
use App\Models\Place;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservationController extends Controller
{
    public function create(Car $car)
    {
        return Inertia::render('Site/Reservation/Create', [
            'car' => new CarResource($car),
            'cars' => CarResource::collection(Car::isActive()->isAvailable()->paginate(12)),
            'places' => PlaceResource::collection(Place::isActive()->whereHas('destinations')->get()),
        ]);
    }

    public function store(Car $car, ReservationRequest $request)
    {
        $reservation = $car->reservations()->create($request->validated());

        return to_route('site.reservations.success', $reservation);
    }

    public function success(Reservation $reservation)
    {
        return Inertia::render('Site/Reservation/Success', [
            'reservation' => new ReservationResource($reservation),
        ]);
    }
}
