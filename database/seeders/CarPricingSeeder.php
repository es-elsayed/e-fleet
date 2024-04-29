<?php

namespace Database\Seeders;

use App\Enums\CarPricing as EnumsCarPricing;
use App\Models\Car;
use App\Models\CarPricing;
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

        foreach ($this->normalPrices() as $car => $data) {
            foreach ($data as $d) {
                CarPricing::create([
                    'destination_id' => $d['destination_id'],
                    'car_id' => $car,
                    'price' => $d['price'],
                    'type' => EnumsCarPricing::Normal,
                ]);
            }
        }
    }

    protected function normalPrices()
    {
        $cars = Car::pluck('id', 'model_en');
        $d = [
            0 =>   Destination::getIdByPlaceName('Mecca', 'Jeddah'),
            1 =>   Destination::getIdByPlaceName('Jeddah', 'Mecca'),

            2 =>  Destination::getIdByPlaceName('Mecca', 'Madinah'),
            3 =>  Destination::getIdByPlaceName('Madinah', 'Mecca'),

            4 =>     Destination::getIdByPlaceName('Mecca', 'Taif'),
            5 =>    Destination::getIdByPlaceName('Taif', 'Mecca'),

            6 =>    Destination::getIdByPlaceName('Madinah', 'Jeddah'),
            7 =>    Destination::getIdByPlaceName('Jeddah', 'Madinah'),

            8 =>    Destination::getIdByPlaceName('Madinah', 'Taif'),
            9 =>    Destination::getIdByPlaceName('Taif', 'Madinah'),

            10 =>    Destination::getIdByPlaceName('Mecca', 'Mazarat Mecca'),
            11 =>    Destination::getIdByPlaceName('Madinah', 'Mazarat Madinah'),

            // 12 =>    Destination::getIdByPlaceName('Mazarat Mecca', 'Mecca'),
            // 13 =>    Destination::getIdByPlaceName('Mazarat Madinah', 'Madinah'),
        ];
        return [
            $cars['Camry'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 200,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 200,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 200,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 200,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 500,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 500,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 500,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 500,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 500,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 500,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 200,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 200,
                ],

            ],
            $cars['Tors'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 250,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 650,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 650,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 650,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 650,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 650,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 650,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 250,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 250,
                ],

            ],
            $cars['Van H1'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 250,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 250,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 700,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 700,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 250,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 250,
                ],

            ],
            $cars['Staria'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 300,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 300,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 300,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 300,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 800,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 800,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 300,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 300,
                ],

            ],
            $cars['Yukon 2020'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 350,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 350,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 350,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 350,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 800,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 800,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 800,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 350,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 350,
                ],

            ],
            $cars['Yukon 2023'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 400,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 1000,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 1000,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 1000,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 1000,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 1000,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 1000,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 400,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 400,
                ],

            ],
            $cars['Hiace'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 400,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 400,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 900,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 900,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 900,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 900,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 900,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 900,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 400,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 400,
                ],

            ],
            $cars['Coaster'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 700,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 700,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 1200,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 1200,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 1200,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 1200,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 1200,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 1200,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 500,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 500,
                ],

            ],
            $cars['Bus'] => [
                [
                    'destination_id' => $d[0],
                    'price' => 100,
                ],
                [
                    'destination_id' => $d[1],
                    'price' => 100,
                ],
                [
                    'destination_id' => $d[2],
                    'price' => 100,
                ],
                [
                    'destination_id' => $d[3],
                    'price' => 100,
                ],

                [
                    'destination_id' => $d[4],
                    'price' => 1600,
                ],
                [
                    'destination_id' => $d[5],
                    'price' => 1600,
                ],

                [
                    'destination_id' => $d[6],
                    'price' => 1600,
                ],
                [
                    'destination_id' => $d[7],
                    'price' => 1600,
                ],
                [
                    'destination_id' => $d[8],
                    'price' => 1600,
                ],
                [
                    'destination_id' => $d[9],
                    'price' => 1600,
                ],

                [
                    'destination_id' => $d[10],
                    'price' => 600,
                ],

                [
                    'destination_id' => $d[11],
                    'price' => 600,
                ],

            ],
        ];
    }
}
