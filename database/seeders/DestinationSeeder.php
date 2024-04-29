<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (mapAllPlaces() as $data) {
            Destination::create($data);
        }
    }
    protected function data()
    {
        $places = Place::pluck('id', 'name_en');
        return [
            [
                "from_place_id" => $places['Mecca'],
                "to_place_id" =>   $places['Jeddah'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Jeddah'],
                "to_place_id" =>   $places['Mecca'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Mecca'],
                "to_place_id" =>   $places['Madinah'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Madinah'],
                "to_place_id" =>   $places['Mecca'],
                "is_active" => 1
            ],

            [
                "from_place_id" => $places['Mecca'],
                "to_place_id" =>   $places['Taif'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Taif'],
                "to_place_id" =>   $places['Mecca'],
                "is_active" => 1
            ],

            [
                "from_place_id" => $places['Madinah'],
                "to_place_id" =>   $places['Jeddah'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Jeddah'],
                "to_place_id" =>   $places['Madinah'],
                "is_active" => 1
            ],

            [
                "from_place_id" => $places['Madinah'],
                "to_place_id" =>   $places['Taif'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Taif'],
                "to_place_id" =>   $places['Madinah'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Mecca'],
                "to_place_id" =>   $places['Mazarat Mecca'],
                "is_active" => 1
            ],
            [
                "from_place_id" => $places['Madinah'],
                "to_place_id" =>   $places['Mazarat Madinah'],
                "is_active" => 1
            ],

        ];

    }
}
