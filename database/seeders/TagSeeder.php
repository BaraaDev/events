<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = new Tag();
        $tags->setTranslation('name', 'en', 'programming')
            ->setTranslation('name', 'ar', 'البرمجة')
            ->setTranslation('name', 'fr', 'programmation');
        $tags->create_user_id = 3;
        $tags->save();

        $tags = new Tag();
        $tags->setTranslation('name', 'en', 'site')
            ->setTranslation('name', 'ar', 'موقع')
            ->setTranslation('name', 'fr', 'site');
        $tags->create_user_id = 4;
        $tags->save();

        $tags = new Tag();
        $tags->setTranslation('name', 'en', 'API')
            ->setTranslation('name', 'ar', 'البرمجه كائنية التوجه')
            ->setTranslation('name', 'fr', 'API');
        $tags->create_user_id = 3;
        $tags->save();

        $tags = new Tag();
        $tags->setTranslation('name', 'en', 'App')
            ->setTranslation('name', 'ar', 'تطبيق')
            ->setTranslation('name', 'fr', 'app');
        $tags->create_user_id = 2;
        $tags->save();

        $tags = new Tag();
        $tags->setTranslation('name', 'en', 'Tags')
            ->setTranslation('name', 'ar', 'علامات')
            ->setTranslation('name', 'fr', 'Tags');
        $tags->create_user_id = 2;
        $tags->save();
    }
}
