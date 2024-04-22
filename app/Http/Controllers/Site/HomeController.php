<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Site\CarResource;
use App\Http\Resources\Site\SliderResource;
use App\Http\Resources\Site\TestimonialResource;
use App\Models\Car;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Site/Home', [
            'cars' => CarResource::collection(Car::isActive()->isAvailable()->paginate(12)),
            'testimonials' => TestimonialResource::collection(Testimonial::confirmed()->inRandomOrder()->paginate(15)),
            'sliders'  => SliderResource::collection(Slider::isActive()->inRandomOrder()->paginate(5)),
        ]);
    }
}
