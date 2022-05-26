<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = new Setting();
        $settings
            ->setTranslation('title', 'en', 'Graduation Project 2 - AASTMT©')
            ->setTranslation('title', 'ar', 'Graduation Project 2 - AASTMT©')
            ->setTranslation('title', 'fr', 'Graduation Project 2 - AASTMT©');
        $settings
            ->setTranslation('content', 'en', 'Graduation Project 2 - AASTMT content')
            ->setTranslation('content', 'ar', 'Graduation Project 2 - AASTMT content')
            ->setTranslation('content', 'fr', 'Graduation Project 2 - AASTMT content');
        $settings->phone     = 010101010101;
        $settings->email     = 'info@event.com';
        $settings->facebook  = 'facebook';
        $settings->twitter   = 'twitter';
        $settings->youtube   = 'youtube';
        $settings->whatsApp  = '002010101010101';
        $settings->instagram = 'instagram';
        $settings->telegram  = 'telegram';
        $settings->linkedin  = 'in/linkedin';
        $settings->location  = 'Egypt, Cairo';
        $settings->save();
    }
}
