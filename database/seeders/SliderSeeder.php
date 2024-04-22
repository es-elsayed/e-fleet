<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $data) {
            Slider::create($data);
        }
    }

    protected function data()
    {
        return [
            [
                "title_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "title_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "description_en" => "Jeddah to Mecca - Jeddah to Jeddah - Jeddah to Madinah - Return service",
                "description_ar" => "توصيل من جدة الى مكة - توصيل من مكة الى جدة - توصيل من جدة الى المدينة المنورة - خدمة ذهاب وعودة",
                "image" => "assets/images/sliders/home_car.png",
                "alt_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "alt_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "action_title_en" => "",
                "action_title_ar" => "",
                "action_url" => "/cars",
                "is_active" => 1,
            ],
            [
                "title_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "title_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "description_en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                "description_ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                "image" => "assets/images/sliders/Lexus_RX_350.png",
                "alt_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "alt_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "action_title_en" => "",
                "action_title_ar" => "",
                "action_url" => "/cars",
                "is_active" => 1,
            ],
            [
                "title_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "title_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "description_en" => "Jeddah to Mecca - Jeddah to Jeddah - Jeddah to Madinah - Return service",
                "description_ar" => "توصيل من جدة الى مكة - توصيل من مكة الى جدة - توصيل من جدة الى المدينة المنورة - خدمة ذهاب وعودة",
                "image" => "assets/images/sliders/gmc-2023.png",
                "alt_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "alt_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "action_title_en" => "",
                "action_title_ar" => "",
                "action_url" => "/cars",
                "is_active" => 1,
            ],
            [
                "title_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "title_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "description_en" => "Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide selection of vehicles and convenient booking system, renting a car has never been this effortless.",
                "description_ar" => "سواء كنت تخطط لقضاء عطلة نهاية الأسبوع أو مغامرة عبر البلاد ، فقد قمنا بتغطيتك. مع مجموعتنا الواسعة من المركبات ونظام الحجز المريح ، لم يكن استئجار سيارة بهذه السهولة من قبل.",
                "image" => "assets/images/sliders/Audi_A4.png",
                "alt_en" => "EASY AND FAST WAY TO RESERVE YOUR CAR",
                "alt_ar" => "أسرع وأسهل طريقة لحجز السيارات",
                "action_title_en" => "",
                "action_title_ar" => "",
                "action_url" => "/cars",
                "is_active" => 1,
            ],
        ];
    }
}
