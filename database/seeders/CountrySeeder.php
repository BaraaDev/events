<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->setTranslation('name', 'en', 'Egypt')
            ->setTranslation('name', 'ar', 'مصر')
            ->setTranslation('name', 'fr', 'Egypt FR');
        $country->create_user_id = 1;
        $country->save();

        $country = new Country();
        $country->setTranslation('name', 'en', 'Morocco')
            ->setTranslation('name', 'ar', 'المغرب')
            ->setTranslation('name', 'fr', 'Morocco FR');
        $country->create_user_id = 2;
        $country->save();

        $country = new Country();
        $country->setTranslation('name', 'en', 'Tunisia')
            ->setTranslation('name', 'ar', 'تونس')
            ->setTranslation('name', 'fr', 'Tunisia FR');
        $country->create_user_id = 3;
        $country->save();
    }
}
