<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class ServicesSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'services_banner_image',
                'value' => 'assets/www.jpg',
                'group' => 'services',
                'label' => 'Hero Banner Image',
                'type' => 'image',
            ],
            [
                'key' => 'services_hero_subtitle',
                'value' => 'OUR SERVICES',
                'group' => 'services',
                'label' => 'Hero Subtitle',
                'type' => 'text',
            ],
            [
                'key' => 'services_hero_title_first',
                'value' => 'Solutions that drive',
                'group' => 'services',
                'label' => 'Hero Title (First Line / White)',
                'type' => 'text',
            ],
            [
                'key' => 'services_hero_title_second',
                'value' => 'operational excellence',
                'group' => 'services',
                'label' => 'Hero Title (Second Line / Orange)',
                'type' => 'text',
            ],
            [
                'key' => 'services_hero_description',
                'value' => 'KSP Consulting provides integrated consulting services to help maritime and industrial businesses overcome challenges and achieve sustainable growth through practical and measurable solutions.',
                'group' => 'services',
                'label' => 'Hero Description',
                'type' => 'textarea',
            ],
            [
                'key' => 'services_stat_1_value',
                'value' => '15+',
                'group' => 'services',
                'label' => 'Metric 1 Value',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_1_label',
                'value' => 'Ship Management Entities Assessed',
                'group' => 'services',
                'label' => 'Metric 1 Label',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_2_value',
                'value' => 'Since 2017',
                'group' => 'services',
                'label' => 'Metric 2 Value',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_2_label',
                'value' => 'Maritime Assessment & Consulting Experience',
                'group' => 'services',
                'label' => 'Metric 2 Label',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_3_value',
                'value' => 'Multiple',
                'group' => 'services',
                'label' => 'Metric 3 Value',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_3_label',
                'value' => 'TMSA Gap Assessments & Implementations',
                'group' => 'services',
                'label' => 'Metric 3 Label',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_4_value',
                'value' => 'Trusted',
                'group' => 'services',
                'label' => 'Metric 4 Value',
                'type' => 'text',
            ],
            [
                'key' => 'services_stat_4_label',
                'value' => 'By Leading Maritime & Industrial Organizations',
                'group' => 'services',
                'label' => 'Metric 4 Label',
                'type' => 'text',
            ],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
