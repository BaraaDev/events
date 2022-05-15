<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->setTranslation('name', 'en', 'Nasr City')
            ->setTranslation('name', 'ar', 'مدينة نصر')
            ->setTranslation('name', 'fr', 'Nasr City FR');
        $city->country_id = 1; // Country Egypt = id:1
        $city->governorate_id = 1; // Governorate Cairo = id:1
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', 'Kasbah alawdia')
            ->setTranslation('name', 'ar', 'قصبة الاوديه')
            ->setTranslation('name', 'fr', 'Kasbah alawdia FR');
        $city->country_id = 2; // Country Morocco = id:2
        $city->governorate_id = 2; // Governorate Rabat = id:2
        $city->create_user_id = 2;
        $city->save();

        $city = new City();
        $city->setTranslation('name', 'en', 'albatann')
            ->setTranslation('name', 'ar', 'البطان')
            ->setTranslation('name', 'fr', 'albatann FR');
        $city->country_id = 3; // Country Tunisia = id:3
        $city->governorate_id = 3; // Governorate Tunisia = id:3
        $city->create_user_id = 3;
        $city->save();
    }
}
