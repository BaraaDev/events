<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $governorate = new Governorate();
        $governorate->setTranslation('name', 'en', 'Cairo')
            ->setTranslation('name', 'ar', 'القاهرة')
            ->setTranslation('name', 'fr', 'Cairo FR');
        $governorate->country_id = 1;
        $governorate->create_user_id = 1;
        $governorate->save();

        $governorate = new Governorate();
        $governorate->setTranslation('name', 'en', 'Rabat')
            ->setTranslation('name', 'ar', 'الرباط')
            ->setTranslation('name', 'fr', 'Rabat FR');
        $governorate->country_id = 2;
        $governorate->create_user_id = 2;
        $governorate->save();

        $governorate = new Governorate();
        $governorate->setTranslation('name', 'en', 'Tunisia')
            ->setTranslation('name', 'ar', 'تونس')
            ->setTranslation('name', 'fr', 'Tunisia FR');
        $governorate->country_id = 3;
        $governorate->create_user_id = 3;
        $governorate->save();
    }
}
