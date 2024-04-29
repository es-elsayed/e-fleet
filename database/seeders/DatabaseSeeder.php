<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            CarSeeder::class,
            PlaceSeeder::class,
            DestinationSeeder::class,
            CarPricingSeeder::class,
            SliderSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
