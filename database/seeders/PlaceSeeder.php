<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $data) {
            Place::create($data);
        }
    }
    protected function data()
    {
        return [
            [
                'name_en' => "Jeddah",
                'name_ar' => "جدة",
                'is_active' => 1
            ],
            [
                'name_en' => "Mecca",
                'name_ar' => "مكة المكرمة",
                'is_active' => 1
            ],
            [
                'name_en' => "Madinah",
                'name_ar' => "المدينة المنورة",
                'is_active' => 1
            ],
            [
                'name_en' => "Taif",
                'name_ar' => "الطائف",
                'is_active' => 1
            ],
            [
                'name_en' => "Mazarat Mecca",
                'name_ar' => "مزارات مكة المكرمة",
                'is_active' => 1
            ],
            [
                'name_en' => "Mazarat Madinah",
                'name_ar' => "مزارات المدينة المنورة",
                'is_active' => 1
            ],
        ];
    }
}
