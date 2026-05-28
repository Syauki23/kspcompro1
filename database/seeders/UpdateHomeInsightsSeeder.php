<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class UpdateHomeInsightsSeeder extends Seeder
{
    public function run()
    {
        Setting::updateOrCreate(
            ['key' => 'home_insights_title'],
            ['value' => 'Our Podcast Series', 'label' => 'Insights / Podcast Title', 'type' => 'text', 'group' => 'home']
        );
        
        Setting::updateOrCreate(
            ['key' => 'home_insights_desc'],
            ['value' => 'Listen to expert talks discussing high-level industry hurdles, leadership culture, and cutting-edge operational frameworks directly with top practitioners.', 'label' => 'Insights / Podcast Description', 'type' => 'textarea', 'group' => 'home']
        );
    }
}
