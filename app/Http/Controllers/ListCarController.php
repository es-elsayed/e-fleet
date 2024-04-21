<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\Site\CarResource;
use App\Models\Car;
use Inertia\Inertia;

class ListCarController extends Controller
{
    public function index()
    {
        return Inertia::render('Site/Car/List', [
            'cars' => CarResource::collection(Car::isActive()->isAvailable()->paginate(12))
        ]);
    }
}
