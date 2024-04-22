<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Resources\Site\CarResource;
use App\Http\Resources\Site\TestimonialResource;
use App\Models\Car;
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
            'sliders' => [
                [
                    "title" => [
                        "en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                        "ar" => "أسرع وأسهل طريقة لحجز السيارات",
                    ],
                    "description" => [
                        "en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                        "ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                    ],
                    "image_url" => "/assets/images/home car.png",
                ],
                [
                    "title" => [
                        "en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                        "ar" => "أسرع وأسهل طريقة لحجز السيارات",
                    ],
                    "description" => [
                        "en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                        "ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                    ],
                    "image_url" => "assets/images/cars/Audi_A4.jpg",
                ],
                [
                    "title" => [
                        "en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                        "ar" => "أسرع وأسهل طريقة لحجز السيارات",
                    ],
                    "description" => [
                        "en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                        "ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                    ],
                    "image_url" => "/assets/images/home car.png",
                ],
                [
                    "title" => [
                        "en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                        "ar" => "أسرع وأسهل طريقة لحجز السيارات",
                    ],
                    "description" => [
                        "en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                        "ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                    ],
                    "image_url" => "assets/images/cars/Nissan_Altima.jpg",
                ],
            ]
        ]);
    }
}
