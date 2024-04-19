<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Site/Home', [
            'sliders' => [
                [
                    "title" => "Image One",
                    "description" => "Description One",
                    "image_url" => "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
                ],
                [
                    "title" => "Image Two",
                    "description" => "Description Two",
                    "image_url" => "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
                ],
                [
                    "title" => "Image Three",
                    "description" => "Description Three",
                    "image_url" => "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
                ],
                [
                    "title" => "Image Four",
                    "description" => "Description Four",
                    "image_url" => "https://hd.wallpaperswide.com/thumbs/chevy_camaro_classic_cars-t2.jpg",
                ],
            ]
        ]);
    }
}
