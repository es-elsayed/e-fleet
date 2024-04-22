<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name_en' => 'Popular',
                'name_ar' => 'شعبي',
                'image' => 'normal.png',
            ],
            [
                'name_en' => 'VIP',
                'name_ar' => 'VIP',
                'image' => 'vip.png',
            ],
            [
                'name_en' => 'Group',
                'name_ar' => 'جماعي',
                'image' => 'group.png',
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
