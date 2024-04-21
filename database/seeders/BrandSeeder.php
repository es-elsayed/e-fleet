<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data() as $data) {
            Brand::create($data);
        };
    }

    protected function data()
    {
        $logoPath = 'assets/images/car_logo/';
        return [
            [
                'name_en' => 'Toyota',
                'name_ar' => 'تويوتا',
                'slug' => 'toyota',
                'logo' => $logoPath . 'toyota.png',
            ],
            [
                'name_en' => 'Honda',
                'name_ar' => 'هوندا',
                'slug' => 'honda',
                'logo' => $logoPath . 'honda.png',
            ],
            [
                'name_en' => 'Ford',
                'name_ar' => 'فورد',
                'slug' => 'ford',
                'logo' => $logoPath . 'ford.png',
            ],
            [
                'name_en' => 'BMW',
                'name_ar' => 'بي إم دبليو',
                'slug' => 'bmw',
                'logo' => $logoPath . 'bmw.png',
            ],
            [
                'name_en' => 'Mercedes',
                'name_ar' => 'مرسيدس',
                'slug' => 'mercedes',
                'logo' => $logoPath . 'mercedes.png',
            ],
            [
                'name_en' => 'Volkswagen',
                'name_ar' => 'فولكس فاجن',
                'slug' => 'Volkswagen',
                'logo' => $logoPath . 'volkswagen.png',
            ],
            [
                'name_en' => 'Chevrolet',
                'name_ar' => 'شيفروليه',
                'slug' => 'chevrolet',
                'logo' => $logoPath . 'chevrolet.png',
            ],
            [
                'name_en' => 'Hyundai',
                'name_ar' => 'هيونداي',
                'slug' => 'hyundai',
                'logo' => $logoPath . 'hyundai.png',
            ],
            [
                'name_en' => 'Audi',
                'name_ar' => 'أودي',
                'slug' => 'audi',
                'logo' => $logoPath . 'audi.png',
            ],
            [
                'name_en' => 'Nissan',
                'name_ar' => 'نيسان',
                'slug' => 'nissan',
                'logo' => $logoPath . 'nissan.png',
            ],
            [
                'name_en' => 'Kia',
                'name_ar' => 'كيا',
                'slug' => 'kia',
                'logo' => $logoPath . 'kia.png',
            ],
            [
                'name_en' => 'Subaru',
                'name_ar' => 'سوبارو',
                'slug' => 'subaru',
                'logo' => $logoPath . 'subaru.png',
            ],
            [
                'name_en' => 'Tesla',
                'name_ar' => 'تسلا',
                'slug' => 'tesla',
                'logo' => $logoPath . 'tesla.png',
            ],
            [
                'name_en' => 'Jaguar',
                'name_ar' => 'جاجوار',
                'slug' => 'jaguar',
                'logo' => $logoPath . 'jaguar.png',
            ],
            [
                'name_en' => 'Lexus',
                'name_ar' => 'Lexus',
                'slug' => 'Lexus',
                'logo' => $logoPath . 'lexus.png',
            ],
            [
                'name_en' => 'Volvo',
                'name_ar' => 'فولفو',
                'slug' => 'volvo',
                'logo' => $logoPath . 'volvo.png',
            ],
            [
                'name_en' => 'Porsche',
                'name_ar' => 'بورش',
                'slug' => 'porsche',
                'logo' => $logoPath . 'porsche.png',
            ],
            [
                'name_en' => 'Mitsubishi',
                'name_ar' => 'متسوبيشي',
                'slug' => 'mitsubishi',
                'logo' => $logoPath . 'mitsubishi.png',
            ],
            [
                'name_en' => 'Land Rover',
                'name_ar' => 'لاند روفر',
                'slug' => 'land-rover',
                'logo' => $logoPath . 'land-rover.png',
            ],
            [
                'name_en' => 'GMC',
                'name_ar' => 'جي إم سي',
                'slug' => 'gmc',
                'logo' => $logoPath . 'gmc.png',
            ],
            [
                'name_en' => 'Fiat',
                'name_ar' => 'فيات',
                'slug' => 'fiat',
                'logo' => $logoPath . 'fiat.png',
            ],
            [
                'name_en' => 'Mini',
                'name_ar' => 'ميني',
                'slug' => 'mini',
                'logo' => $logoPath . 'mini.png',
            ],
            [
                'name_en' => 'Jeep',
                'name_ar' => 'جيب',
                'slug' => 'jeep',
                'logo' => $logoPath . 'jeep.png',
            ],
            [
                'name_en' => 'Mazda',
                'name_ar' => 'مازدا',
                'slug' => 'mazda',
                'logo' => $logoPath . 'mazda',
            ],
        ];
    }
}
