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

        foreach ($this->lowPrices() as $car => $data) {
            foreach ($data as $key => $value) {
                CarPricing::create([
                    'destination_id' => $value['destination_id'],
                    'car_id' => $car,
                    'price' => $value['price'],
                    'type' => EnumsCarPricing::Low,
                ]);
            }
        }
        foreach ($this->normalPrices() as $car => $data) {
            foreach ($data as $key => $value) {
                CarPricing::create([
                    'destination_id' => $value['destination_id'],
                    'car_id' => $car,
                    'price' => $value['price'],
                    'type' => EnumsCarPricing::Normal,
                ]);
            }
        }
        foreach ($this->highPrices() as $car => $data) {
            foreach ($data as $key => $value) {
                CarPricing::create([
                    'destination_id' => $value['destination_id'],
                    'car_id' => $car,
                    'price' => $value['price'],
                    'type' => EnumsCarPricing::High,
                ]);
            }
        }
    }

    protected function destination($key = null)
    {
        $dest =  [
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

        return  $dest[$key];
    }

    protected function car($key = null)
    {
        $cars =  Car::pluck('id', 'model_en');
        return $key ? $cars[$key] : $cars;
    }


    protected function lowPrices()
    {

        return [
            $this->car('Camry') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 150,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 150,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 150,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 150,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 450,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 450,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 150,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 150,
                ],

            ],
            $this->car('Tors') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 600,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 600,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 200,
                ],

            ],
            $this->car('Van H1') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 650,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 650,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 200,
                ],

            ],
            $this->car('Staria') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 250,
                ],

            ],
            $this->car('Yukon 2020') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 300,
                ],

            ],
            $this->car('Yukon 2023') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 350,
                ],

            ],
            $this->car('Hiace') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 850,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 850,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 850,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 850,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 850,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 850,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 350,
                ],

            ],
            $this->car('Coaster') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 650,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1100,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1100,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 400,
                ],

            ],
            $this->car('Bus') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 950,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 950,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 950,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 950,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1500,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1500,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1500,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1500,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1500,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1500,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 500,
                ],

            ],
        ];
    }

    protected function normalPrices()
    {

        return [
            $this->car('Camry') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 200,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 200,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 200,
                ],

            ],
            $this->car('Tors') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 650,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 650,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 650,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 250,
                ],

            ],
            $this->car('Van H1') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 250,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 700,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 700,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 250,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 250,
                ],

            ],
            $this->car('Staria') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 300,
                ],

            ],
            $this->car('Yukon 2020') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 350,
                ],

            ],
            $this->car('Yukon 2023') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1000,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1000,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 400,
                ],

            ],
            $this->car('Hiace') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 400,
                ],

            ],
            $this->car('Coaster') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 700,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 700,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1200,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1200,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1200,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1200,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1200,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1200,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 500,
                ],

            ],
            $this->car('Bus') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 1000,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1600,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1600,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1600,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1600,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1600,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1600,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 600,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 600,
                ],

            ],
        ];
    }


    protected function highPrices()
    {

        return [
            $this->car('Camry') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 300,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 600,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 600,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 600,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 300,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 300,
                ],

            ],
            $this->car('Tors') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 750,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 750,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 350,
                ],

            ],
            $this->car('Van H1') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 350,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 350,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 350,
                ],

            ],
            $this->car('Staria') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 400,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 400,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 400,
                ],

            ],
            $this->car('Yukon 2020') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 450,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 450,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 900,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 900,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 450,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 450,
                ],

            ],
            $this->car('Yukon 2023') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1100,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1100,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 500,
                ],

            ],
            $this->car('Hiace') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 500,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1000,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1000,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1000,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 500,
                ],

            ],
            $this->car('Coaster') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 800,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 800,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1300,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1300,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1300,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1300,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1300,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1300,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 500,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 500,
                ],

            ],
            $this->car('Bus') => [
                [
                    'destination_id' => $this->destination(0),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(1),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(2),
                    'price' => 1100,
                ],
                [
                    'destination_id' => $this->destination(3),
                    'price' => 1100,
                ],

                [
                    'destination_id' => $this->destination(4),
                    'price' => 1700,
                ],
                [
                    'destination_id' => $this->destination(5),
                    'price' => 1700,
                ],

                [
                    'destination_id' => $this->destination(6),
                    'price' => 1700,
                ],
                [
                    'destination_id' => $this->destination(7),
                    'price' => 1700,
                ],
                [
                    'destination_id' => $this->destination(8),
                    'price' => 1700,
                ],
                [
                    'destination_id' => $this->destination(9),
                    'price' => 1700,
                ],

                [
                    'destination_id' => $this->destination(10),
                    'price' => 700,
                ],

                [
                    'destination_id' => $this->destination(11),
                    'price' => 700,
                ],

            ],
        ];
    }
}
