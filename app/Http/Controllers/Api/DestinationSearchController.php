<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Site\DestinationToDetailsResource;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationSearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return DestinationToDetailsResource::collection(Destination::isActive()->where('from_place_id', request('id'))->get());
    }
}
