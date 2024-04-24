<?php

namespace Database\Seeders;

use App\Enums\CarPricing;
use App\Models\Car;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $value) {
            CarPricing::create($data);
        }
    }

    protected function data()
    {




        $cars = Car::pluck('id', 'name_en');
        $destinations = Destination::pluck('id', 'model_en');
        return [
            $cars['Camry'] => [
                [
                    'from_destination_id' => $destinations['Mecca'],
                    'to_destination_id' => $destinations['Jeddah'],
                    'price' => 200,
                ],
                [
                    'from_destination_id' => $destinations['Mecca'],
                    'to_destination_id' => $destinations['Madinah'],
                    'price' => 500,
                ],
                [
                    'from_destination_id' => $destinations['Madinah'],
                    'to_destination_id' => $destinations['Jeddah'],
                    'price' => 500,
                ],
                [
                    'from_destination_id' => $destinations['Mecca'],
                    'to_destination_id' => $destinations['Mazarat Mecca'],
                    'price' => 500,
                ],
                [
                    'from_destination_id' => $destinations['Mecca'],
                    'to_destination_id' => $destinations['Mazarat Mecca'],
                    'price' => 500,
                ],
            ]
        ];
        // return [
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Camry'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Tors'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Van H1'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['2020'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['2023'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Hiace'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Staria'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Coaster'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        //     [
        //         'from_destination_id' => $destinations[],
        //         'to_destination_id' => $destinations[],
        //         'car_id' => $cars['Bus'],
        //         'price' => 200,
        //         'type' => CarPricing::Low,
        //     ],
        // ];
    }
}
