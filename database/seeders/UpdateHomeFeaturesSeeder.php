<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class UpdateHomeFeaturesSeeder extends Seeder
{
    public function run()
    {
        Setting::updateOrCreate(
            ['key' => 'home_feature_1_title'],
            ['value' => 'Maritime Expertise', 'label' => 'Feature 1 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_feature_1_desc'],
            ['value' => 'Years of hands-on industry experience', 'label' => 'Feature 1 Description', 'type' => 'text', 'group' => 'home']
        );

        Setting::updateOrCreate(
            ['key' => 'home_feature_2_title'],
            ['value' => 'Strategic Solutions', 'label' => 'Feature 2 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_feature_2_desc'],
            ['value' => 'Tailored strategies that drive results', 'label' => 'Feature 2 Description', 'type' => 'text', 'group' => 'home']
        );

        Setting::updateOrCreate(
            ['key' => 'home_feature_3_title'],
            ['value' => 'Trusted Partner', 'label' => 'Feature 3 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_feature_3_desc'],
            ['value' => 'Collaborative approach for lasting impact', 'label' => 'Feature 3 Description', 'type' => 'text', 'group' => 'home']
        );
        
        Setting::updateOrCreate(
            ['key' => 'home_feature_4_title'],
            ['value' => 'Global Perspective Local Understanding', 'label' => 'Feature 4 Title', 'type' => 'text', 'group' => 'home']
        );
        Setting::updateOrCreate(
            ['key' => 'home_feature_4_desc'],
            ['value' => 'Connecting standards with real-world execution', 'label' => 'Feature 4 Description', 'type' => 'text', 'group' => 'home']
        );
    }
}
