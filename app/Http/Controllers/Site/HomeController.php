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
            'cars' => [
                [
                    'image_url' => 'assets/images/cars/Toyota_Camry.jpg',
                    'discount' => '50',
                    'brand' => 'Mercedes',
                    'model' => '2020',
                    'engine' => 'V12',
                    'price_per_day' => '100',
                    'reduce' => '20',
                    'phone' => "00201001074075",
                    'stars' => 3,
                ],
                [
                    'image_url' => 'assets/images/cars/Honda_Civic.jpg',
                    'discount' => '30',
                    'brand' => 'Audi',
                    'model' => '2021',
                    'engine' => 'V12',
                    'price_per_day' => '130',
                    'reduce' => '30',
                    'phone' => "00201001074075",
                    'stars' => 4,
                ],
                [
                    'image_url' => 'assets/images/cars/Ford_Mustang.jpg',
                    'discount' => '50',
                    'brand' => 'BmW',
                    'model' => '2022',
                    'engine' => 'V12',
                    'price_per_day' => '120',
                    'reduce' => '20',
                    'phone' => "00201001074075",
                    'stars' => 5,
                ],
                [
                    'image_url' => 'assets/images/cars/BMW_X5.jpg',
                    'discount' => '50',
                    'brand' => 'Mercedes',
                    'model' => '2020',
                    'engine' => 'V12',
                    'price_per_day' => '100',
                    'reduce' => '20',
                    'phone' => "00201001074075",
                    'stars' => 3,
                ],
                [
                    'image_url' => 'assets/images/cars/Mercedes-Benz_E-Class.jpg',
                    'discount' => '30',
                    'brand' => 'Audi',
                    'model' => '2021',
                    'engine' => 'V12',
                    'price_per_day' => '130',
                    'reduce' => '30',
                    'phone' => "00201001074075",
                    'stars' => 4,
                ],
                [
                    'image_url' => 'assets/images/cars/Chevrolet_Malibu.jpg',
                    'discount' => '50',
                    'brand' => 'BmW',
                    'model' => '2022',
                    'engine' => 'V12',
                    'price_per_day' => '120',
                    'reduce' => '20',
                    'phone' => "00201001074075",
                    'stars' => 5,
                ],
            ],
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
