<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class UpdateHomeServicesCardsSeeder extends Seeder
{
    public function run()
    {
        Setting::updateOrCreate(
            ['key' => 'home_services_card_1_title'],
            ['value' => 'Maritime Consulting', 'label' => 'Service Card 1 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_services_card_1_desc'],
            ['value' => 'Strategic operational assessments, safety management frameworks, and process optimization tailored to global maritime compliance.', 'label' => 'Service Card 1 Description', 'type' => 'textarea', 'group' => 'home']
        );

        Setting::updateOrCreate(
            ['key' => 'home_services_card_2_title'],
            ['value' => 'Risk & HR Assessment', 'label' => 'Service Card 2 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_services_card_2_desc'],
            ['value' => 'Comprehensive crew audits, operational risk mapping, and competency profiling to ensure high-reliability human capital performance.', 'label' => 'Service Card 2 Description', 'type' => 'textarea', 'group' => 'home']
        );

        Setting::updateOrCreate(
            ['key' => 'home_services_card_3_title'],
            ['value' => 'Workshop & Training', 'label' => 'Service Card 3 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_services_card_3_desc'],
            ['value' => 'Interactive, highly practical knowledge sharing sessions combining regulatory best practices with intensive case-study masterclasses.', 'label' => 'Service Card 3 Description', 'type' => 'textarea', 'group' => 'home']
        );
    }
}
