<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class GlobalSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Website Logo & Identity
            ['key' => 'site_logo', 'value' => '', 'group' => 'global', 'label' => 'Website Logo (Header & Footer)', 'type' => 'image'],
            
            // Design / Customization
            ['key' => 'navbar_color', 'value' => 'rgba(10, 20, 40, 0.92)', 'group' => 'global', 'label' => 'Navbar Background Color (Hex or RGBA)', 'type' => 'color'],

            // Social Media links
            ['key' => 'social_instagram', 'value' => 'https://instagram.com', 'group' => 'global', 'label' => 'Instagram URL', 'type' => 'text'],
            ['key' => 'social_linkedin', 'value' => 'https://linkedin.com', 'group' => 'global', 'label' => 'LinkedIn URL', 'type' => 'text'],
            ['key' => 'social_youtube', 'value' => 'https://youtube.com', 'group' => 'global', 'label' => 'YouTube URL', 'type' => 'text'],
            ['key' => 'social_spotify', 'value' => 'https://spotify.com', 'group' => 'global', 'label' => 'Spotify Podcast URL', 'type' => 'text'],
            ['key' => 'social_tiktok', 'value' => 'https://tiktok.com', 'group' => 'global', 'label' => 'TikTok URL', 'type' => 'text'],

            // Contact Information
            ['key' => 'contact_phone', 'value' => '+62 878 8023 1853', 'group' => 'contact', 'label' => 'Contact Telephone Number', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'info@ksp-consulting.com', 'group' => 'contact', 'label' => 'Contact Email Address', 'type' => 'text'],
            ['key' => 'contact_address', 'value' => 'Jakarta, Indonesia', 'group' => 'contact', 'label' => 'Company Address Line', 'type' => 'textarea'],
            ['key' => 'contact_whatsapp_link', 'value' => 'https://wa.me/6287880231853', 'group' => 'contact', 'label' => 'WhatsApp Chat Link', 'type' => 'text'],
            ['key' => 'contact_banner_title_white', 'value' => 'Strategic Solutions for', 'group' => 'contact', 'label' => 'CTA Strip Title White Text', 'type' => 'text'],
            ['key' => 'contact_banner_title_orange', 'value' => 'Maritime Excellence', 'group' => 'contact', 'label' => 'CTA Strip Title Orange Text', 'type' => 'text'],
            ['key' => 'contact_banner_description', 'value' => 'Knowledge-driven consulting to help maritime and industrial businesses operate safely, efficiently, and sustainably.', 'group' => 'contact', 'label' => 'CTA Strip Description Text', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
