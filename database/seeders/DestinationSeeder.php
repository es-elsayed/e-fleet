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
        foreach ($this->data() as $data) {
            Destination::create($data);
        }
    }
    protected function data()
    {
        $places = Place::pluck('name_en','id' );

        // Loop through each element of $arr1
        foreach ($places as $from_id => $from) {
            foreach ($places as $to_id => $to) {
                // Skip if $from and $to are the same
                if ($from_id === $to_id) {
                    continue;
                }
                // Construct the new array element
                $result[] = [
                    "from_place_id" => $from_id,
                    "to_place_id" => $to_id,
                    "is_active" => 1
                ];
            }
        }
        return $result;
    }
}
