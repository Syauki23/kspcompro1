<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class ContactUpdateSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            // Hero / Banner
            [
                'key' => 'contact_banner_image',
                'value' => 'assets/ngecet.jpg',
                'group' => 'contact',
                'label' => 'Banner Background Image',
                'type' => 'image'
            ],
            // Get In Touch Section
            [
                'key' => 'contact_section_title',
                'value' => "Let's Start a Conversation",
                'group' => 'contact',
                'label' => 'Section Title (Get In Touch)',
                'type' => 'text'
            ],
            [
                'key' => 'contact_section_subtitle',
                'value' => "GET IN TOUCH",
                'group' => 'contact',
                'label' => 'Section Subtitle',
                'type' => 'text'
            ],
            [
                'key' => 'contact_section_description',
                'value' => "Have a question or need more information? We're here to help.",
                'group' => 'contact',
                'label' => 'Section Description',
                'type' => 'textarea'
            ],
            [
                'key' => 'contact_section_image',
                'value' => 'assets/training.png',
                'group' => 'contact',
                'label' => 'Section Sidebar Image',
                'type' => 'image'
            ],
            [
                'key' => 'contact_section_image_caption',
                'value' => 'We value every conversation and look forward to supporting your business.',
                'group' => 'contact',
                'label' => 'Sidebar Image Caption',
                'type' => 'textarea'
            ],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
