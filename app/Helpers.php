<?php

use App\Models\Place;

if (!function_exists('mapAllPlaces')) {

    function mapAllPlaces()
    {
        $places = Place::pluck('name_en', 'id');
        // Loop through each element of $arr1
        $result = [];
        if ($places && is_array($places)) {
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
        }
        return $result;
    }
}
