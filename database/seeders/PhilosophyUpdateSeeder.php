<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class PhilosophyUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Header
            ['key' => 'phil_banner_image', 'value' => 'assets/sumatra.jpg', 'group' => 'philosophy', 'label' => 'Banner Background Image', 'type' => 'image'],
            ['key' => 'phil_subtitle', 'value' => 'OUR PHILOSOPHY & CULTURE', 'group' => 'philosophy', 'label' => 'Subtitle', 'type' => 'text'],
            ['key' => 'phil_title_first', 'value' => 'The Philosophy', 'group' => 'philosophy', 'label' => 'Main Title Part 1 (White)', 'type' => 'text'],
            ['key' => 'phil_title_second', 'value' => 'Behind KSP', 'group' => 'philosophy', 'label' => 'Main Title Part 2 (Orange Accent)', 'type' => 'text'],
            ['key' => 'phil_intro_card', 'value' => "The word \"Swarna\" comes from Sanskrit\nmeaning \"gold,\" symbolizing excellence, trust,\nvalue, and meaningful partnerships.", 'group' => 'philosophy', 'label' => 'Intro Card Text', 'type' => 'textarea'],
            ['key' => 'phil_intro_text', 'value' => "Inspired by \"Swarnadwipa\" (Island of Gold), KSP Consulting\nbelieves operational excellence is built through connectivity,\ninnovation, integrity, and collaborative growth.", 'group' => 'philosophy', 'label' => 'Intro Paragraph Text', 'type' => 'textarea'],
            ['key' => 'phil_badge_title', 'value' => 'SWARNADWIPA', 'group' => 'philosophy', 'label' => 'Badge Title', 'type' => 'text'],
            ['key' => 'phil_badge_sub', 'value' => 'ISLAND OF GOLD', 'group' => 'philosophy', 'label' => 'Badge Subtitle', 'type' => 'text'],

            // Compass Section
            ['key' => 'phil_compass_title', 'value' => 'Our Culture, Our Compass', 'group' => 'philosophy', 'label' => 'Compass Section Title', 'type' => 'text'],
            ['key' => 'phil_compass_desc', 'value' => 'SWARNADWIPA represents the values that guide us in everything we do.', 'group' => 'philosophy', 'label' => 'Compass Section Description', 'type' => 'textarea'],

            // Slider Section
            ['key' => 'phil_slider_image', 'value' => 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=600&q=80', 'group' => 'philosophy', 'label' => 'Default Slider Image', 'type' => 'image'],
        ];

        // Clean up legacy key
        Setting::where('key', 'phil_title')->delete();

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
