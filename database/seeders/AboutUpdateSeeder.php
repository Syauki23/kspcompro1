<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class AboutUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Header & Description
            ['key' => 'about_subtitle', 'value' => 'WHO WE ARE', 'group' => 'about', 'label' => 'About Subtitle', 'type' => 'text'],
            ['key' => 'about_title', 'value' => 'About KSP Consulting', 'group' => 'about', 'label' => 'About Title', 'type' => 'text'],
            ['key' => 'about_desc', 'value' => "KSP Consulting (Karya Swarna Persada) is a consulting firm dedicated to helping businesses navigate operational and organizational challenges through innovative, practical, and sustainable solutions.\n\nWith expertise in maritime consulting, business management, technical training, risk assessment, and transportation consultancy, KSP Consulting supports companies in achieving operational excellence and long-term growth.\n\nDriven by integrity, connectivity, and excellence, the company believes strong partnerships create sustainable impact across industries.", 'group' => 'about', 'label' => 'About Description (Paragraphs)', 'type' => 'textarea'],

            // Statistics
            ['key' => 'about_stat_1_num', 'value' => '15+', 'group' => 'about', 'label' => 'Stat 1 Number', 'type' => 'text'],
            ['key' => 'about_stat_1_label', 'value' => 'Ship Management Entities Assessed', 'group' => 'about', 'label' => 'Stat 1 Label', 'type' => 'text'],
            ['key' => 'about_stat_2_num', 'value' => 'Since 2017', 'group' => 'about', 'label' => 'Stat 2 Number', 'type' => 'text'],
            ['key' => 'about_stat_2_label', 'value' => 'Maritime Assessment & Consulting Experience', 'group' => 'about', 'label' => 'Stat 2 Label', 'type' => 'text'],
            ['key' => 'about_stat_3_num', 'value' => 'Multiple', 'group' => 'about', 'label' => 'Stat 3 Number', 'type' => 'text'],
            ['key' => 'about_stat_3_label', 'value' => 'Industries Served Across Indonesia', 'group' => 'about', 'label' => 'Stat 3 Label', 'type' => 'text'],

            // Images Grid
            ['key' => 'about_image_1', 'value' => 'assets/training.png', 'group' => 'about', 'label' => 'Image 1 (Training Session)', 'type' => 'image'],
            ['key' => 'about_image_2', 'value' => 'assets/uuuaaa.png', 'group' => 'about', 'label' => 'Image 2 (Man Ship)', 'type' => 'image'],
            ['key' => 'about_image_3', 'value' => 'assets/uuu.png', 'group' => 'about', 'label' => 'Image 3 (Hard Hats)', 'type' => 'image'],
            ['key' => 'about_image_4', 'value' => 'assets/about.png', 'group' => 'about', 'label' => 'Image 4 (Woman Laptop)', 'type' => 'image'],
            ['key' => 'about_image_5', 'value' => 'https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?auto=format&fit=crop&w=800&q=80', 'group' => 'about', 'label' => 'Image 5 (Ship Bridge)', 'type' => 'image'],

            // Core Values
            ['key' => 'about_core_title', 'value' => 'OUR CORE VALUES', 'group' => 'about', 'label' => 'Core Values Title', 'type' => 'text'],
            ['key' => 'about_core_1_title', 'value' => 'INTEGRITY', 'group' => 'about', 'label' => 'Core Value 1 Title', 'type' => 'text'],
            ['key' => 'about_core_1_desc', 'value' => 'We uphold honesty, transparency, and ethical standards in everything we do.', 'group' => 'about', 'label' => 'Core Value 1 Description', 'type' => 'textarea'],
            ['key' => 'about_core_2_title', 'value' => 'CONNECTIVITY', 'group' => 'about', 'label' => 'Core Value 2 Title', 'type' => 'text'],
            ['key' => 'about_core_2_desc', 'value' => 'We build meaningful connections that create value for our clients, partners, and communities.', 'group' => 'about', 'label' => 'Core Value 2 Description', 'type' => 'textarea'],
            ['key' => 'about_core_3_title', 'value' => 'EXCELLENCE', 'group' => 'about', 'label' => 'Core Value 3 Title', 'type' => 'text'],
            ['key' => 'about_core_3_desc', 'value' => 'We are committed to delivering high-quality solutions and continuous improvement.', 'group' => 'about', 'label' => 'Core Value 3 Description', 'type' => 'textarea'],
            ['key' => 'about_core_4_title', 'value' => 'COLLABORATION', 'group' => 'about', 'label' => 'Core Value 4 Title', 'type' => 'text'],
            ['key' => 'about_core_4_desc', 'value' => 'We believe the best results come from teamwork, trust, and shared goals.', 'group' => 'about', 'label' => 'Core Value 4 Description', 'type' => 'textarea'],
            ['key' => 'about_core_5_title', 'value' => 'INNOVATION', 'group' => 'about', 'label' => 'Core Value 5 Title', 'type' => 'text'],
            ['key' => 'about_core_5_desc', 'value' => 'We embrace new ideas and practical approaches to solve complex challenges.', 'group' => 'about', 'label' => 'Core Value 5 Description', 'type' => 'textarea'],
            ['key' => 'about_core_6_title', 'value' => 'IMPACT', 'group' => 'about', 'label' => 'Core Value 6 Title', 'type' => 'text'],
            ['key' => 'about_core_6_desc', 'value' => 'We focus on creating sustainable impact that drives long-term growth.', 'group' => 'about', 'label' => 'Core Value 6 Description', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
