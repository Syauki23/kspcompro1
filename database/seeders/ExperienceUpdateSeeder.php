<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class ExperienceUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Header
            ['key' => 'exp_banner_image', 'value' => 'assets/experient.jpg', 'group' => 'experience', 'label' => 'Banner Background Image', 'type' => 'image'],
            ['key' => 'exp_subtitle', 'value' => 'OUR EXPERIENCE', 'group' => 'experience', 'label' => 'Subtitle', 'type' => 'text'],
            ['key' => 'exp_title', 'value' => 'Our Experiences', 'group' => 'experience', 'label' => 'Main Title', 'type' => 'text'],
            ['key' => 'exp_desc', 'value' => "Our team has contributed to multiple maritime\nconsulting, assessment, operational improvement,\nand safety projects across industries.", 'group' => 'experience', 'label' => 'Description (Paragraphs)', 'type' => 'textarea'],

            // Stats
            ['key' => 'exp_stat_1_num', 'value' => '15+', 'group' => 'experience', 'label' => 'Stat 1 Number', 'type' => 'text'],
            ['key' => 'exp_stat_1_label', 'value' => "Ship Management\nEntities Assessed", 'group' => 'experience', 'label' => 'Stat 1 Label', 'type' => 'textarea'],
            ['key' => 'exp_stat_2_num', 'value' => '30+', 'group' => 'experience', 'label' => 'Stat 2 Number', 'type' => 'text'],
            ['key' => 'exp_stat_2_label', 'value' => "Projects Completed\nSuccessfully", 'group' => 'experience', 'label' => 'Stat 2 Label', 'type' => 'textarea'],
            ['key' => 'exp_stat_3_num', 'value' => '8+', 'group' => 'experience', 'label' => 'Stat 3 Number', 'type' => 'text'],
            ['key' => 'exp_stat_3_label', 'value' => "Years of Consulting\nExperience", 'group' => 'experience', 'label' => 'Stat 3 Label', 'type' => 'textarea'],
            ['key' => 'exp_stat_4_num', 'value' => '100%', 'group' => 'experience', 'label' => 'Stat 4 Number', 'type' => 'text'],
            ['key' => 'exp_stat_4_label', 'value' => "Commitment to Safety,\nQuality & Integrity", 'group' => 'experience', 'label' => 'Stat 4 Label', 'type' => 'textarea'],
            ['key' => 'exp_stat_5_num', 'value' => 'Multiple', 'group' => 'experience', 'label' => 'Stat 5 Number', 'type' => 'text'],
            ['key' => 'exp_stat_5_label', 'value' => "Industries Served\nAcross Indonesia", 'group' => 'experience', 'label' => 'Stat 5 Label', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
